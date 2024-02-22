<?php

namespace App\Models;

use App\Models\Abstract\ModelAbstract;

class Contact extends ModelAbstract
{
    protected ?int $id;
    protected string $type;
    protected string $identification;
    protected string $firstname;
    protected string $secondname;
    protected string $lastname;
    protected string $residence;
    protected string $phonenumber;
    protected string $city;

    public function getDisplayName(): string
    {
        return sprintf('%s %s %s (%s) - %s', $this->firstname, $this->secondname, $this->lastname, $this->identification, $this->city);
    }

    public function toArray(): array
    {
        return [
            'id'             => $this->id,
            'type'           => $this->type,
            'identification' => $this->identification,
            'displayName'    => $this->getDisplayName(),
            'firstname'      => $this->firstname,
            'secondname'     => $this->secondname,
            'lastname'       => $this->lastname,
            'residence'      => $this->residence,
            'phonenumber'    => $this->phonenumber,
            'city'           => $this->city,
        ];
    }
}