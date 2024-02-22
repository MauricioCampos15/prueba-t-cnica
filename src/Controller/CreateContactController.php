<?php

namespace App\Controller;
use App\Controller\Abstract\AbstractController;
use App\Exception\ModelValidationException;
use App\Factories\ContactFactory;
use App\Repositories\ContactRepository;
use Throwable;

class CreateContactController extends AbstractController
{
    public function index()
    {
        $this->renderView('Contact::create');
    }

    public function save(array $parameters): void
    {
        $alertType = 'success';
        $message = 'Contacto creado correctamente';

        try {
            $contact = ContactFactory::createFromArray($parameters);
            ContactRepository::save($contact);
            $this->list([
                'showAlert' => true,
                'alertType' => 'success',
                'message'   => $message,
            ]);

        } catch (Throwable $e) {
            $this->renderView('Contact::create', [
                'showAlert' => true,
                'alertType' => 'danger',
                'message'   => $e->getMessage(),
            ]);
        }

        
    }

    public function all()
    {
        $status = 'success';
        $message = '';
        $contactsInfo = [];

        try {
            $contacts = ContactRepository::all();
            foreach ($contacts as $contact) {
                $contactsInfo[] = $contact->toArray();
            }
        } catch (Throwable $th) {
            $status = 'error';
            $message = $th->getMessage();
        }
        $this->jsonReponse(['status' => $status, 'message' => $message, 'contacts' => $contactsInfo]);
    }

    public function list(array $messageInfo = [])
    {
        try {
            $contacts = ContactRepository::all();
            $this->renderView('Contact::list', array_merge(['contacts' => $contacts], $messageInfo));
        } catch (Throwable $th) {
            echo $th->getMessage() . PHP_EOL;
            echo $th->getFile() . PHP_EOL;
            echo $th->getLine() . PHP_EOL;
        }
    }
}