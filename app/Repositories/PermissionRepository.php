<?php

namespace App\Repositories;

use App\Models\Permission;

class PermissionRepository implements PermissionRepositoryInterface
{
   /**
     * @var Permission
     */
    protected $model;

    /**
     * The guard name permission associated with.
     *
     * @var string
     */
    public $guard_name;

    /**
     * PermissionRepository constructor.
     *
     * @param Permission $model
     */
    public function __construct(Permission $model)
    {
        $this->model = $model;
    }

    /**
     * Get all Permission.
     *
     */
    public function allNames()
    {
        $items = $this->model->whereGuardName($this->guard_name)->get();
        return $items->pluck('name')->all();
    }

    public function allIds()
    {
        $items = $this->model->whereGuardName($this->guard_name)->get();
        return $items->pluck('id')->all();
    }

    /**
     * Creates many permissions at once.
     *
     * @param array
     */
    public function createMany(array $data)
    {
        return $this->model->insert($data);
    }

    /**
     * Creates a permission.
     *
     * @param array
     */
    public function create(array $data)
    {
        $data['guard_name'] = $this->guard_name;
        return $this->model->create($data);
    }
}
