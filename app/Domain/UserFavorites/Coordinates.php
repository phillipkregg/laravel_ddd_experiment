<?php

namespace App\Domain\UserFavorites;

class Coordinates
{
    protected float $lat;
    protected float $lon;

    public function __construct(float $lat, float $lon)
    {
        $this->lat = $lat;
        $this->lon = $lon;
    }

    public function getLat(): float
    {
        return $this->lat;
    }

    public function getLon(): float
    {
        return $this->lon;
    }

    public function isEqualTo(Coordinates $other): bool
    {
        return $this->lat === $other->getLat() && $this->lon === $other->getLon();
    }
}
