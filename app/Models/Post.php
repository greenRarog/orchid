<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;

class Post extends Model
{
    use AsSource, Attachable, Filterable;

    protected $fillable = [
        "title",
        "description",
        "body",
        "author",
        "hero"
    ];
    protected $allowedSorts = [
        'title' => Like::class,
        'created_at',
        'updated_at'
    ];
}
