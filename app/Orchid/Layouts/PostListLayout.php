<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use App\Models\Post;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;


class PostListLayout extends Table
{
    public $target = "posts";
    public function columns(): array
    {
        return [
            TD::make("title", "Title")
                ->render(function (Post $post) {
                    return Link::make($post->title)
                        ->route("platform.post.edit", $post);
                }),

            TD::make("created_at", "Created"),
            TD::make("updated_at", "Last edit"),
        ];
    }
}
