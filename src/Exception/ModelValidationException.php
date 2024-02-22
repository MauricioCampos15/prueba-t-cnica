<?php

namespace App\Exception;

use Exception;

class ModelValidationException extends Exception
{
    public function __construct(string $model, string $field, string $message)
    {
        parent::__construct(sprintf('Error en la validación del campo %s del modelo %s: %s', 
            $field, 
            $model, 
            $message
        ));
    }
}