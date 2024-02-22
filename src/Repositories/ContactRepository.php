<?php

namespace App\Repositories;

use App\Factories\ContactFactory;
use App\Models\Contact;
use App\Repositories\Abstract\RepositoryAbstract;

class ContactRepository extends RepositoryAbstract
{
    protected static function modelData($contact): array
    {
        return [
            'type'           => $contact->type,
            'identification' => $contact->identification,
            'firstname'      => $contact->firstname,
            'secondname'     => $contact->secondname,
            'lastname'       => $contact->lastname,
            'residence'      => $contact->residence,
            'phonenumber'    => $contact->phonenumber,
            'city'           => $contact->city,
        ];
    }

    protected static function tableName(): string
    {
        return 'contacts';
    }

    protected static function factory()
    {
        return ContactFactory::class;
    }
}