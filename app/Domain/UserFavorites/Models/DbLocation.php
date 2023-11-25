<?php

namespace App\Domain\UserFavorites\Models;

use App\Domain\UserFavorites\Coordinates;
use Illuminate\Database\Eloquent\Model;

class DbLocation extends Model
{

    protected $table = 'locations';
    protected float $latitude;
    protected float $longitude;

    public function setCoordinatesAttribute(Coordinates $coordinates): void
    {
        $this->attributes['latitude'] = $coordinates->getLat();
        $this->attributes['longitude'] = $coordinates->getLon();
    }

    public function getCoordinatesAttribute(): Coordinates
    {
        return new Coordinates($this->latitude, $this->longitude);
    }
}