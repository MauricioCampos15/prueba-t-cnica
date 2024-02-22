<?php

namespace App\Controller;

use App\Controller\Abstract\AbstractController;
use App\Factories\CarFactory;
use App\Repositories\CarRepository;
use \Throwable;

class CreateCarController extends AbstractController
{
    public function index(): void
    {
        $this->renderView('Car::create');
    }

    public function save(array $parameters): void
    {
        $message = 'Carro creado correctamente';
        $nextView = 'Car::create';

        try {
            $car = CarFactory::createFromArray($parameters);
            CarRepository::save($car);
            $this->list([
                'showAlert' => true,
                'alertType' => 'success',
                'message'   => $message,
            ]);
        } catch (Throwable $e) {
            $this->renderView('Car::create', [
                'showAlert' => true,
                'alertType' => 'danger',
                'message'   => $message,
            ]);
        }        
    }
    
    public function list(array $messageData = [])
    {
        $cars = CarRepository::all();
        $this->renderView('Car::list', array_merge(['cars' => $cars], $messageData));
    }
    
    public function report1()
    {
        $cars = CarRepository::all();
        $this->renderView('Car::report1', ['cars' => $cars]);
    }
}