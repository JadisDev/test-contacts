<?php

namespace App\Interfaces\Service\Contact;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;

interface ContactServiceInterface
{
    public function all(): Collection;
    public function store(StoreContactRequest $request): ?Contact;
    public function show(int $id): ?Contact;
    public function update(UpdateContactRequest $request): ?Contact;
    public function delete(int $id): ?Contact;
}
