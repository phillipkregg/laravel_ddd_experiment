<?php

namespace App\Http\Controllers;

use App\Domain\UserFavorites\Models\DbFilm;
use Inertia\Inertia;

class MoviesController extends Controller
{
    public function getAll()
    {
        return Inertia::render('WatchLists', [
            'movies' => DbFilm::all()->map(function ($film) {
                return [
                    'id' => $film->film_id,
                    'name' => $film->title,
                    'description' => $film->description,
                    'release_year' => $film->release_year,
                ];
            })
        ]);
    }
}