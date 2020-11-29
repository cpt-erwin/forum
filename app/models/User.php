<?php

namespace TuMiSoft\Forum\Models;

class User extends Model
{
    private string $firstName;
    private string $lastName;

    public static function getAll(): array
    {
        return []; // TODO: Implement getByID() method.
    }

    static function getByID(int $id): ?User
    {
        return null; // TODO: Implement getByID() method.
    }
}