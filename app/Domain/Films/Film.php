<?php

namespace App\Domain\Films;

use DateTime;
use Spatie\LaravelData\Data;

class Film extends Data
{
    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public int $release_year,
        public int $language_id,
        public int|null $original_language_id,
        public int $rental_duration,
        public float $rental_rate,
        public int $length,
        public float $replacement_cost,
        public string $rating,
        public string $special_features,
        public DateTime $last_update,

    ) {
    }
}
