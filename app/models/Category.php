<?php

namespace TuMiSoft\Forum\Models;

class Category extends Model
{
    private string $title;
    private ?string $description;

    /** @var Thread[] Category threads */
    private array $threads;

    public function __construct(string $title, ?string $description = null)
    {
        $this->title = $title;
        $this->description = $description;

        parent::__construct();
    }

    public static function getAll(bool $withThreads = true): array
    {
        return [
            new Category("test"),
            new Category("test")
        ]; // TODO: Implement getByID() method.
    }

    static function getByID(int $id): ?Category
    {
        return null; // TODO: Implement getByID() method.
    }

    public function jsonSerialize()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
        ];
    }
}

