<?php

namespace TuMiSoft\Forum\Models;

class Post extends Model
{
    private string $title;
    private string $content;

    /** @var Comment[] Post comments */
    private array $comments;

    public static function getAll(bool $withComments = false): array
    {
        return []; // TODO: Implement getByID() method.
    }

    static function getByID(int $id): ?Post
    {
        return null; // TODO: Implement getByID() method.
    }
}