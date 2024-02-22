<?php

namespace App\Repositories;

use App\Factories\CarFactory;
use App\Models\Car;
use App\Repositories\Abstract\RepositoryAbstract;

class CarRepository extends RepositoryAbstract
{
    protected static function modelData($car): array
    {
        return [
            'plate'     => $car->plate,
            'color'     => $car->color,
            'brand'     => $car->brand,
            'kind'      => $car->kind,
            'owner_id'  => $car->owner_id,
            'driver_id' => $car->driver_id,
        ];
    }

    protected static function tableName(): string
    {
        return 'car';
    }

    protected static function factory()
    {
        return CarFactory::class;
    }
}