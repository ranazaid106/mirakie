<?php


namespace App\Repositories;


use App\CRUD\Repositories\BaseCRUDRepository;
use App\Models\User;


class UserRepository extends BaseCRUDRepository implements UserRepositoryInterface
{
    public function setup()
    {
        $this->setModel(User::class);

        $this->setIndexWiths([]);
        $this->setShowWiths(['roles:id,name']);

        $this->setRelated(['roles:id,name']);
    }

    /**
     * Assign role to a user.
     *
     * @param Employee $item
     * @param string $role
     */
    public function assignRole($item, $role)
    {
        $item = $item->assignRole($role);
        return $item;
    }

    /**
     * Assign permission to a user.
     *
     * @param Employee $item
     * @param mixed $role
     */
    public function assignPermission($item, $permission)
    {
        $item = $item->givePermissionTo($permission);
        return $item;
    }

    /**
     * Sync role of an employee.
     *
     * @param Employee $item
     * @param string $role
     */
    public function syncRole($item, $role)
    {
        $item = $item->syncRoles($role);
        return $item;
    }

    /**
     * Sync permission of an employee.
     *
     * @param Employee $item
     * @param mixed $role
     */
    public function syncPermission($item, $permission)
    {
        $item = $item->syncPermissions($permission);
        return $item;
    }
}
