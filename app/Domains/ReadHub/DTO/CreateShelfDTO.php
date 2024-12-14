<?php

namespace App\Domains\ReadHub\DTO;

use App\Domains\ReadHub\Http\Requests\ShelfFormRequest;

class CreateShelfDTO
{
    public function __construct(
        public readonly string $name
    ) {
    }

    public static function fromRequest(ShelfFormRequest $request)
    {
        return new self(
            $request->validated('name')
        );
    }
}
