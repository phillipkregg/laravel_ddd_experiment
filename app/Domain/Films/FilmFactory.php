<?php

namespace App\Domain\Films;

class FilmFactory
{
    public function fromRequest(
        FilmRequest $request
    ): Film {
        //dd($request);
        return new Film(
            id: $request->getFilmId(),
            title: $request->getTitle(),
            description: $request->getDescription(),
            release_year: $request->getReleaseYear(),
            language_id: $request->getLanguageId(),
            original_language_id: $request->getOriginalLanguageId(),
            rental_duration: $request->getRentalDuration(),
            rental_rate: $request->getRentalRate(),
            length: $request->getLength(),
            replacement_cost: $request->getReplacementCost(),
            rating: $request->getRating(),
            special_features: $request->getSpecialFeatures(),
            last_update: $request->getLastUpdate(),
        );
    }
}