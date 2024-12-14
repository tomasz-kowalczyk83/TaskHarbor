<?php

namespace App\Domains\ReadHub\Service;

use App\Domains\ReadHub\DTO\CreateShelfDTO;
use App\Domains\ReadHub\Models\Shelf;
use Illuminate\Support\Facades\Auth;

final class ShelfService
{
    public function create(CreateShelfDTO $dto): Shelf
    {
        return Shelf::create([
            'name' => $dto->name,
            'user_id' => Auth::user()->id,
        ]);
    }
}
