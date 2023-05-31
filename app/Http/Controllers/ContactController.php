<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Interfaces\Service\Contact\ContactServiceInterface;
use Exception;

class ContactController extends Controller
{
    private $service;

    public function __construct(ContactServiceInterface  $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $contacts = $this->service->all()->toArray();
        return view("pages.contact.list", [
            'contacts' => $contacts
        ]);
    }

    public function newContact()
    {
        return view("pages.contact.new-contact");
    }

    public function store(StoreContactRequest $requet)
    {
        $contact = $this->service->store($requet);
        return redirect("/contacts")->with("success", "new contact created: " . $contact->name);
    }

    public function show()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
