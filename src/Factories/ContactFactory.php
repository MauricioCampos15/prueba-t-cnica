<?php

namespace App\Factories;

use App\Factories\Abstract\FactoryAbstract;
use App\Models\Contact;

class ContactFactory extends FactoryAbstract
{
    public static function createFromArray(array $data): Contact
    {
        self::validateData($data);
        $contact = new Contact();

        $contact->id             = $data['id'] ?? null;
        $contact->type           = $data['type'] ?? null;
        $contact->identification = $data['identification'] ?? null;
        $contact->firstname      = $data['firstname'] ?? null;
        $contact->secondname     = $data['secondname'] ?? null;
        $contact->lastname       = $data['lastname'] ?? null;
        $contact->residence      = $data['residence'] ?? null;
        $contact->phonenumber    = $data['phonenumber'] ?? null;
        $contact->city           = $data['city'] ?? null;

        return $contact;
    }

    public static function getMandatoryFields(): array
    {
        return [
            'type',
            'identification',
            'firstname',
            'secondname',
            'lastname',
            'residence',
            'phonenumber',
            'city',
        ];
    }

    public static function modelName(): string
    {
        return 'Contacto';
    }
}