<?php

namespace TuMiSoft\Forum\Models;

use TuMiSoft\Forum\Exceptions\Models\ModelNotFoundException;

abstract class Model
{
    protected string $table;

    public function __construct()
    {
        $this->table = get_class($this);
    }

    /**
     * Returns all models
     *
     * @return Model[]
     */
    abstract static function getAll(): array;

    /**
     * Returns Model by ID
     *
     * @param int $id
     *
     * @throws ModelNotFoundException If Model with specified ID does not exists
     *
     * @return Model|null
     */
    abstract static function getByID(int $id): ?Model;

}