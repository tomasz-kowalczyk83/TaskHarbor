<?php

namespace App\Domains\ReadHub\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'isbn',
        'published_date',
        'pages'
    ];

    protected function casts(): array
    {
        return [
            'published_date' => 'datetime:Y-m-d'
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
