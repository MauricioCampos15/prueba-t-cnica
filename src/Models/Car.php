<?php

namespace App\Models;

use App\Models\Abstract\ModelAbstract;
use App\Repositories\ContactRepository;

class Car extends ModelAbstract
{
    protected ?int $id;
    protected string $plate;
    protected string $color;
    protected string $brand;
    protected string $kind;
    protected string $owner_id;
    protected string $driver_id;

    public function getOwner(): Contact
    {
        return ContactRepository::findById($this->owner_id);
    }

    public function getDriver(): Contact
    {
        return ContactRepository::findById($this->driver_id);
    }

    public function toArray(): array
    {
        return [
            'plate'     => $this->plate,
            'color'     => $this->color,
            'brand'     => $this->brand,
            'kind'      => $this->kind,
            'owner_id'  => $this->owner_id,
            'driver_id' => $this->driver_id,
        ];
    }
}