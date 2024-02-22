<?php

namespace App\Factories\Abstract;

use App\Exception\ModelValidationException;

abstract class FactoryAbstract
{
    final protected static function validateData(array $data)
    {
        $mandatoryFields = static::getMandatoryFields();
        foreach ($mandatoryFields as $field) {
            if (!array_key_exists($field, $data) || $data[$field] === null) {
                throw new ModelValidationException(
                    static::modelName(),
                    $field,
                    'Valor requerido'
                );
            }
        }
    }

    abstract static function getMandatoryFields(): array;

    abstract static function modelName(): string;
}