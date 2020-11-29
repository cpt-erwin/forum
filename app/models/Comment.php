<?php

namespace TuMiSoft\Forum\Models;

class Comment extends Model
{
    private string $content;

    public static function getAll(): array
    {
        return []; // TODO: Implement getByID() method.
    }

    static function getByID(int $id): ?Comment
    {
        return null; // TODO: Implement getByID() method.
    }
}