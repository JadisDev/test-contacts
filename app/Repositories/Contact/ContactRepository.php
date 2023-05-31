<?php

namespace App\Repositories\Contact;

use App\Interfaces\Repository\RepositoryInterface;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;

class ContactRepository implements RepositoryInterface
{

    protected $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function getAll(): Collection
    {
        return $this->contact->all();
    }

    public function getById($id): ?Contact
    {
        return $this->contact->find($id);
    }

    public function create(array $data): Contact
    {
        return $this->contact->create($data);
    }

    public function update($id, array $data): ?Contact
    {
        $contact = $this->getById($id);
        if ($contact) {
            $contact->update($data);
            return $contact;
        }
        return null;
    }

    public function delete($id): ?Contact
    {
        $contact = $this->getById($id);
        if ($contact) {
            $contact->delete();
            return $contact;
        }
        return null;
    }
}
