<?php

namespace App\Repositories;

interface PermissionRepositoryInterface
{
    /**
     * Get all Permission.
     *
     */
    public function allNames();

    public function allIds();

    /**
     * Creates a Permission.
     *
     * @param string
     */
    public function create(array $data);
}
