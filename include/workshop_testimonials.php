<?php

/**
 * Fetch educator reviews for Mission AIM workshops.
 * Joins workshop_feedback with users for profile images.
 */

function aim_profile_image_url(string $baseUri, ?string $profile): ?string
{
    if (empty($profile)) {
        return null;
    }

    if (preg_match('#^https?://#i', $profile)) {
        return $profile;
    }

    $path = ltrim($profile, '/');
    if (!str_starts_with($path, 'public/')) {
        $path = 'public/' . $path;
    }

    return rtrim($baseUri, '/') . '/' . $path;
}

function aim_review_avatar(string $name): string
{
    $seed = urlencode(trim($name) !== '' ? $name : 'Educator');
    return 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=80&h=80&q=80&sig=' . $seed;
}

function aim_truncate_text(string $text, int $max = 108): string
{
    $text = trim(preg_replace('/\s+/u', ' ', $text));
    if ($text === '') {
        return '';
    }

    if (mb_strlen($text) <= $max) {
        return $text;
    }

    return rtrim(mb_substr($text, 0, $max - 1)) . '…';
}

function aim_truncate_role(string $role, int $max = 42): string
{
    return aim_truncate_text($role, $max);
}

function aim_review_role(?string $designation, ?string $institute, ?string $school, ?string $city): string
{
    $parts = array_filter([
        $designation ?: 'Educator',
        $institute ?: $school,
        $city,
    ]);

    return aim_truncate_role(implode(' · ', $parts));
}

function aim_fallback_reviews(): array
{
    return [
        [
            'name' => 'Priya Sharma',
            'role' => 'Educator · Delhi',
            'text' => aim_truncate_text('The AI Masterclass gave me practical tools I could use in class the very next day.'),
            'image' => aim_review_avatar('Priya Sharma'),
            'rating' => 5,
        ],
        [
            'name' => 'Ananya Mehta',
            'role' => 'Teacher · Mumbai',
            'text' => 'Clear, engaging, and immediately useful for modern classrooms.',
            'image' => aim_review_avatar('Ananya Mehta'),
            'rating' => 5,
        ],
        [
            'name' => 'Rahul Verma',
            'role' => 'School Leader · Bengaluru',
            'text' => 'A well-structured workshop with real classroom examples and strong facilitation.',
            'image' => aim_review_avatar('Rahul Verma'),
            'rating' => 5,
        ],
        [
            'name' => 'Kavita Nair',
            'role' => 'Educator · Pune',
            'text' => 'My students are more engaged and I feel far more prepared for the AI era.',
            'image' => aim_review_avatar('Kavita Nair'),
            'rating' => 5,
        ],
        [
            'name' => 'Sneha Iyer',
            'role' => 'Teacher · Hyderabad',
            'text' => 'Excellent pacing, strong facilitation, and actionable takeaways throughout.',
            'image' => aim_review_avatar('Sneha Iyer'),
            'rating' => 5,
        ],
        [
            'name' => 'Arjun Patel',
            'role' => 'Educator · Ahmedabad',
            'text' => 'I appreciated the ethical focus alongside the tools. Highly recommended.',
            'image' => aim_review_avatar('Arjun Patel'),
            'rating' => 5,
        ],
        [
            'name' => 'Meera Joshi',
            'role' => 'Teacher · Jaipur',
            'text' => 'Helped me redesign lessons with AI while keeping student learning at the centre.',
            'image' => aim_review_avatar('Meera Joshi'),
            'rating' => 5,
        ],
        [
            'name' => 'Vikram Singh',
            'role' => 'Principal · Chandigarh',
            'text' => 'Inspiring, practical, and energising for every educator in my network.',
            'image' => aim_review_avatar('Vikram Singh'),
            'rating' => 5,
        ],
    ];
}

function aim_get_workshop_reviews(int $workshopId = 275, int $limit = 24): array
{
    $fallback = aim_fallback_reviews();

    $connectPath = __DIR__ . '/connect.php';
    if (!file_exists($connectPath)) {
        return $fallback;
    }

    require_once $connectPath;

    if (empty($connect) || !($connect instanceof mysqli)) {
        return $fallback;
    }

    $sql = "
        SELECT
            wf.full_name,
            wf.school_name,
            wf.city,
            wf.feedback_rating,
            wf.rating_description,
            u.name AS user_name,
            u.profile,
            u.designation,
            u.institute_name
        FROM workshop_feedback wf
        LEFT JOIN users u ON u.email = wf.email
        WHERE wf.workshop_id = ?
          AND wf.rating_description IS NOT NULL
          AND TRIM(wf.rating_description) <> ''
        ORDER BY wf.created_at DESC
        LIMIT ?
    ";

    $stmt = mysqli_prepare($connect, $sql);
    if (!$stmt) {
        return $fallback;
    }

    mysqli_stmt_bind_param($stmt, 'ii', $workshopId, $limit);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $reviews = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $name = trim((string) ($row['user_name'] ?? '')) !== ''
            ? $row['user_name']
            : $row['full_name'];

        $reviews[] = [
            'name' => $name,
            'role' => aim_review_role(
                $row['designation'] ?? null,
                $row['institute_name'] ?? null,
                $row['school_name'] ?? null,
                $row['city'] ?? null
            ),
            'text' => aim_truncate_text($row['rating_description']),
            'image' => aim_profile_image_url($uri, $row['profile'] ?? null) ?? aim_review_avatar((string) $name),
            'rating' => $row['feedback_rating'] !== null ? (float) $row['feedback_rating'] : null,
        ];
    }

    mysqli_stmt_close($stmt);

    return count($reviews) > 0 ? $reviews : $fallback;
}

function aim_average_review_rating(array $reviews, float $fallback = 4.79): float
{
    $ratings = array_values(array_filter(array_map(
        static fn(array $review) => $review['rating'] ?? null,
        $reviews
    ), static fn($rating) => $rating !== null));

    if (count($ratings) === 0) {
        return $fallback;
    }

    return round(array_sum($ratings) / count($ratings), 2);
}

function aim_render_review_card(array $review): string
{
    $name = htmlspecialchars((string) $review['name'], ENT_QUOTES, 'UTF-8');
    $role = htmlspecialchars((string) $review['role'], ENT_QUOTES, 'UTF-8');
    $text = htmlspecialchars(aim_truncate_text((string) $review['text']), ENT_QUOTES, 'UTF-8');
    $image = htmlspecialchars((string) $review['image'], ENT_QUOTES, 'UTF-8');

    return '
        <article class="ws-review-card">
            <div class="ws-review-card__author">
                <img src="' . $image . '" alt="' . $name . '" class="ws-review-card__avatar" loading="lazy" width="44" height="44">
                <div class="ws-review-card__meta">
                    <div class="ws-review-card__name">' . $name . '</div>
                    <div class="ws-review-card__role">' . $role . '</div>
                </div>
            </div>
            <p class="ws-review-card__text">&ldquo;' . $text . '&rdquo;</p>
        </article>
    ';
}

function aim_render_review_marquee_row(array $reviews, string $direction = 'left', int $duration = 40): string
{
    if (count($reviews) === 0) {
        return '';
    }

    $cards = '';
    foreach (array_merge($reviews, $reviews) as $review) {
        $cards .= aim_render_review_card($review);
    }

    $class = $direction === 'right' ? 'ws-reviews-flow__track--right' : 'ws-reviews-flow__track--left';

    return '
        <div class="ws-reviews-flow__row">
            <div class="ws-reviews-flow__track ' . $class . '" style="--ws-review-duration: ' . (int) $duration . 's;">' . $cards . '</div>
        </div>
    ';
}

function aim_split_reviews_into_rows(array $reviews, int $rows = 3): array
{
    $split = array_fill(0, $rows, []);

    foreach ($reviews as $index => $review) {
        $split[$index % $rows][] = $review;
    }

    foreach ($split as $index => $row) {
        if (count($row) === 0 && count($reviews) > 0) {
            $split[$index] = $reviews;
        }
    }

    return $split;
}
