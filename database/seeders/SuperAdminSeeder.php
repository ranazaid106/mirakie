<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    protected $model;

    /**      
     * DefaultAdminSeeder constructor.      
     *      
     * @param AdminRepositoryInterface $repository      
     * @param Hash $hash
     * @return void
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Super Admin',
            'password' => Hash::make('1234567890'),
            "email" => 'admin@admin.com',
            "created_at" => now(),
            "updated_at" => now(),
        ];

        $item = $this->model->create($data);

        $role = [];
        $role['name'] = 'Super Admin';
        $role['guard_name'] = 'web';

        $roleCreate = Role::create($role);

        $permissionsAll=Permission::get();
        foreach ($permissionsAll as $permission) {
            $roleCreate->givePermissionTo($permission);
            $item->givePermissionTo($permission);
        }

        $item->assignRole(array($roleCreate->id));


    }
}
