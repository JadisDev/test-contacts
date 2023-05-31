<?php

namespace App\Services\Contact;

use App\Exceptions\NotFoundModelException;
use App\Exceptions\UniqueException;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Interfaces\Repository\RepositoryInterface;
use App\Interfaces\Service\Contact\ContactServiceInterface;
use App\Models\Contact;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\QueryException;

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

    public function store(StoreContactRequest $request): ?Contact
    {
        try {
            return $this->repository->create($request->all());
        } catch (QueryException $e) {
            if ($e->getCode() === "23505") {
                throw new UniqueException("contact/email");
            }
            throw $e;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function show(int $id): ?Contact
    {
        $contact = $this->repository->getById($id);
        if (!$contact) {
            throw new NotFoundModelException("contact not found");
        }
        return $contact;
    }

    public function update(UpdateContactRequest $request): ?Contact
    {
        try {
            $id = $request->get('id');
            return $this->repository->update($id, $request->all());
        } catch (QueryException $e) {
            if ($e->getCode() === "23505") {
                throw new UniqueException("contact/email");
            }
            throw $e;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function delete(int $id): ?Contact
    {
        $this->show($id);
        return $this->repository->delete($id);
    }
}
