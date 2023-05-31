<?php

namespace App\Services\Contact;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Interfaces\Repository\RepositoryInterface;
use App\Interfaces\Service\Contact\ContactServiceInterface;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;

class ContactService implements ContactServiceInterface
{

    protected $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function all(): Collection
    {
        return $this->repository->getAll();
    }

    public function store(StoreContactRequest $request): Contact
    {
        return $this->repository->create($request->all());
    }

    public function show(int $id): Contact
    {
        return $this->repository->getById($id);
    }

    public function update(UpdateContactRequest $request): Contact
    {
        $id = $request->get('id');
        return $this->repository->update($id, $request->all());
    }

    public function delete(int $id): Contact
    {
        return $this->repository->delete($id);
    }

}
