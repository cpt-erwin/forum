<?php

namespace TuMiSoft\Forum\Models;

class Category extends Model
{
    private string $title;
    private ?string $description;

    /** @var Thread[] Category threads */
    private array $threads;

    public static function getAll(bool $withThreads = true): array
    {
        return []; // TODO: Implement getByID() method.
    }

    static function getByID(int $id): ?Category
    {
        return null; // TODO: Implement getByID() method.
    }
}

