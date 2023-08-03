<?php


namespace App\Repositories\Admin;


interface AdminRepositoryInterface
{
    /**
     * Get's all employee accounts.
     *
     * @param int
     * @return mixed
     */
    public function paginate($perPage);

    /**
     * Get's all related data for filling form.
     *
     * @return mixed
     */
    public function related();

    /**
     * Get's a employee account by it's ID
     *
     * @param string
     */
    public function get($id);

    /**
     * Creates a employee account.
     *
     * @param array
     */
    public function create(array $data);

    /**
     * Updates a employee account.
     *
     * @param int
     * @param array
     */
    public function update($id, array $data);

    /**
     * Deletes a employee account.
     *
     * @param int
     */
    public function delete($id);


     /**
     * Assign role to a user.
     *
     * @param User $item
     * @param string $role
     */
    public function assignRole($item, $role);

    /**
     * Assign permission to a user.
     *
     * @param User $item
     * @param mixed $role
     */
    public function assignPermission($item, $permission);

    /**
     * Sync role of a user.
     *
     * @param User $item
     * @param string $role
     */
    public function syncRole($item, $role);

    /**
     * Sync permission of a user.
     *
     * @param User $item
     * @param mixed $role
     */
    public function syncPermission($item, $permission);
}
