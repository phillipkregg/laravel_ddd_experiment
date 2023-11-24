<?php

namespace App\Domain\Films;

use App\Models\DbFilm;
use Carbon\Carbon;

class FilmRequest
{
    private DbFilm $requestData;

    public function __construct($requestData)
    {
        $this->requestData = $requestData;
    }

    public function getFilmId()
    {
        return $this->requestData->film_id;
    }

    public function getTitle()
    {
        return $this->requestData->title;
    }

    public function getDescription()
    {
        return $this->requestData->description;
    }

    public function getReleaseYear()
    {
        return $this->requestData->release_year;
    }

    public function getLanguageId()
    {
        return $this->requestData->language_id;
    }

    public function getOriginalLanguageId()
    {
        return $this->requestData->original_language_id;
    }

    public function getRentalDuration()
    {
        return $this->requestData->rental_duration;
    }

    public function getRentalRate()
    {
        return $this->requestData->rental_rate;
    }

    public function getLength()
    {
        return $this->requestData->length;
    }

    public function getReplacementCost()
    {
        return $this->requestData->replacement_cost;
    }

    public function getRating()
    {
        return $this->requestData->rating;
    }

    public function getLastUpdate()
    {
        return Carbon::parse($this->requestData->last_update);
    }

    public function getSpecialFeatures()
    {
        return $this->requestData->special_features;
    }

}