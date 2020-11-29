<?php

namespace TuMiSoft\Forum\Models;

class User extends Model
{
    private string $firstName;
    private string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;

        parent::__construct();
    }

    public static function getAll(): array
    {
        return []; // TODO: Implement getByID() method.
    }

    static function getByID(int $id): ?User
    {
        return null; // TODO: Implement getByID() method.
    }

    public function jsonSerialize()
    {
        return [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
        ];
    }
}