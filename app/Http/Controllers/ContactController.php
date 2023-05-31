<?php

namespace App\Http\Controllers;

use App\Exceptions\NotFoundModelException;
use App\Exceptions\UniqueException;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Interfaces\Service\Contact\ContactServiceInterface;
use Exception;

class ContactController extends Controller
{
    private $service;

    public function __construct(ContactServiceInterface $service)
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

    public function formContactView()
    {
        return view("pages.contact.form", [
            'contact' => [
                'id' => '',
                'name' => '',
                'email' => '',
                'contact' => ''
            ],
            'title' => 'New contact'
        ]);
    }

    public function store(StoreContactRequest $requet)
    {
        try {
            $contact = $this->service->store($requet);
            return redirect("/contacts")->with("success", "new contact created: " . $contact->name);
        } catch (UniqueException $e) {
            return redirect("/contact")->with("error", $e->getMessage());
        } catch (Exception $e) {
            return redirect("/contact")->with("error", $e->getMessage());
        }
    }

    public function updateView(int $id)
    {
        try {
            $contact = $this->service->show($id);
            return view("pages.contact.form", [
                'contact' => $contact,
                'title' => 'Update contact'
            ]);
        } catch (NotFoundModelException $e) {
            return redirect("/contact/19")->with("error", $e->getMessage());
        }
    }

    public function update(UpdateContactRequest $requet)
    {
        try {
            $contact = $this->service->update($requet);
            return redirect("/contacts")->with("success", "updated contact: " . $contact->name);
        } catch (NotFoundModelException $e) {
            return redirect("/contact/" . $requet->id)->with("error", $e->getMessage());
        } catch (UniqueException $e) {
            return redirect("/contact/" . $requet->id)->with("error", $e->getMessage());
        }
    }

    public function showView(int $id)
    {
        try {
            $contact = $this->service->show($id);
            return view("pages.contact.detail", [
                'contact' => $contact,
                'title' => 'Update contact'
            ]);
        } catch (NotFoundModelException $e) {
            return redirect("/contacts")->with("error", $e->getMessage());
        }
    }

    public function delete(int $id)
    {
        try {
            $contact = $this->service->delete($id);
            return redirect("/contacts")->with("success", "deleted record: " . $contact->name);
        } catch (NotFoundModelException $e) {
            return redirect("/contacts")->with("error", $e->getMessage());
        }
    }
}
