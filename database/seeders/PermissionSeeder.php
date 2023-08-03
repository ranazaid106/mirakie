<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions  =  [
            "View User",
            "Create User",
            "Update User",
            "Delete User",

            "View Role",
            "Create Role",
            "Update Role",
            "Delete Role",
          
            "View Product",
            "Create Product",
            "Update Product",
            "Delete Product",

            "View Product Variation",
            "Create Product Variation",
            "Update Product Variation",
            "Delete Product Variation",

            "View Order",
            "Create Order",
            "Update Order",
            "Delete Order",

            "View Customer",
            "Create Customer",
            "Update Customer",
            "Delete Customer",

            "View Coupen",
            "Create Coupen",
            "Update Coupen",
            "Delete Coupen",
            
            "View File Upload",
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
