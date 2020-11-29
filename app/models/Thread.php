<?php

namespace TuMiSoft\Forum\Models;

class Thread extends Model
{
    private string $title;
    private ?string $description;

    /** @var Thread[] Thread sub-threads */
    private array $subThreads;

    public static function getAll(bool $withSubThreads = false, bool $withPosts = false): array
    {
        return []; // TODO: Implement getByID() method.
    }

    static function getByID(int $id): ?Thread
    {
        return null; // TODO: Implement getByID() method.
    }
}