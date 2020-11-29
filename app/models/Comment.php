<?php

namespace TuMiSoft\Forum\Models;

class Comment extends Model
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;

        parent::__construct();
    }

    public static function getAll(): array
    {
        return []; // TODO: Implement getByID() method.
    }

    static function getByID(int $id): ?Comment
    {
        return null; // TODO: Implement getByID() method.
    }

    public function jsonSerialize()
    {
        return [
            'content' => $this->content
        ];
    }
}