<?php

namespace App\Repositories\Abstract;

use App\Database\DatabaseConector;
use App\Models\Abstract\ModelAbstract;

abstract class RepositoryAbstract
{
    final public static function save(ModelAbstract $model): void
    {
        $data = static::modelData($model);
        $sql = static::createInsertStatement($data);
        DatabaseConector::execute($sql);
    }

    final public static function all(): array
    {
        $sql = sprintf('SELECT * FROM %s order by id desc', static::tableName());
        $data = DatabaseConector::query($sql);

        $models = [];
        foreach ($data as $row) {
            $models[] = static::factory()::createFromArray($row);
        }

        return $models;
    }

    final public static function findById(int $id): ModelAbstract
    {
        $sql = sprintf('SELECT * FROM %s WHERE id = %d', static::tableName(), $id);
        $data = DatabaseConector::query($sql);

        return static::factory()::createFromArray($data[0]);
    }

    private static function createInsertStatement(array $data): string
    {
        $columns = $values = [];

        foreach ($data as $column => $value) {
            $columns[] = $column;
            
            if (is_int($value)) {
                $values[] = $value;
                continue;
            }
            if (is_string($value)) {
                $values[] = "'$value'";
                continue;
            }
            $values[] = 'null';
        }

        return sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            static::tableName(),
            implode(', ', $columns),
            implode(', ', $values)
        );
    }

    abstract protected static function modelData($model): array;

    abstract protected static function tableName(): string;

    abstract protected static function factory();
}