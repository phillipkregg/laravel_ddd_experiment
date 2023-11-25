<?php

namespace App\Domain\UserFavorites;

use App\Domain\Interfaces\Locatable;
use DateTime;

class Customer
{
    public function __construct(
        public int $customer_id,
        public int $store_id,
        public string $first_name,
        public string $last_name,
        public string $email,
        public int $address_id,
        public int $active,
        public DateTime $create_date,
        public DateTime $last_update,
    ) {
    }

    public function getCustomerId(): int
    {
        return $this->customer_id;
    }
    
}