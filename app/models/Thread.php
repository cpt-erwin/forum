<?php

namespace TuMiSoft\Forum\Models;

class Thread extends Model
{
    private string $title;
    private ?string $description;

    /** @var Thread[] Thread sub-threads */
    private array $subThreads;

    /** @var Post[] Thread posts */
    private array $posts;

    public function __construct(string $title, ?string $description = null)
    {
        $this->title = $title;
        $this->description = $description;

        parent::__construct();
    }

    public static function getAll(bool $withSubThreads = false, bool $withPosts = false): array
    {
        return []; // TODO: Implement getByID() method.
    }

    static function getByID(int $id): ?Thread
    {
        return null; // TODO: Implement getByID() method.
    }

    public function jsonSerialize()
    {
        return [
            'title' => $this->title,
            'description' => $this->description
        ];
    }
}