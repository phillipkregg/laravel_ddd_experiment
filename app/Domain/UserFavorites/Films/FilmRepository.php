<?php

namespace App\Domain\UserFavorites\Films;

use App\Domain\UserFavorites\Models\DbFilm;
use Carbon\Carbon;

class FilmRepository
{

    public function __construct()
    {
    }

    public function fromId(int $id): Film|null
    {
        $dbFilm = DbFilm::firstWhere('film_id', $id);

        if (!$dbFilm) {
            return null;
        }

        return new Film(
            $dbFilm->film_id,
            $dbFilm->title,
            $dbFilm->description,
            $dbFilm->release_year,
            $dbFilm->language_id,
            $dbFilm->original_language_id,
            $dbFilm->rental_duration,
            $dbFilm->rental_rate,
            $dbFilm->length,
            $dbFilm->replacement_cost,
            $dbFilm->rating,
            $dbFilm->special_features,
            Carbon::parse($dbFilm->last_update),
        );
    }

}