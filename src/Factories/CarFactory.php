<?php

namespace App\Factories;

use App\Factories\Abstract\FactoryAbstract;
use App\Models\Car;

class CarFactory extends FactoryAbstract
{
    public static function createFromArray(array $data): Car
    {
        self::validateData($data);
        $car = new Car();

        $car->id        = $data['id'] ?? null;
        $car->plate     = $data['plate'] ?? null;
        $car->color     = $data['color'] ?? null;
        $car->brand     = $data['brand'] ?? null;
        $car->kind      = $data['kind'] ?? null;
        $car->owner_id  = $data['owner_id'] ?? null;
        $car->driver_id = $data['driver_id'] ?? null;

        return $car;
    }

    public static function getMandatoryFields(): array
    {
        return [
            'plate',
            'color',
            'brand',
            'kind',
            'owner_id',
            'driver_id',
        ];
    }

    public static function modelName(): string
    {
        return 'Carro';
    }
}