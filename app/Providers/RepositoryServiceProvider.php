<?php


namespace App\Providers;

use App\CRUD\Repositories\BaseCRUDRepository;
use App\CRUD\Repositories\BaseCRUDRepositoryInterface;
use App\Repositories\Admin\AdminRepository;
use App\Repositories\Admin\AdminRepositoryInterface;
use App\Repositories\Admin\AuthRepository as AdminAuthRepository;
use App\Repositories\Admin\AuthRepositoryInterface as AdminAuthRepositoryInterface;
use App\Repositories\Admin\PermissionRepository as AdminPermissionRepository;
use App\Repositories\Admin\PermissionRepositoryInterface as AdminPermissionRepositoryInterface;
use App\Repositories\Admin\RoleRepository as AdminRoleRepository;
use App\Repositories\Admin\RoleRepositoryInterface as AdminRoleRepositoryInterface;
use App\Repositories\PermissionRepository;
use App\Repositories\PermissionRepositoryInterface;
use App\Repositories\AuthRepository;
use App\Repositories\AuthRepositoryInterface;
use App\Repositories\CoupenRepository;
use App\Repositories\CoupenRepositoryInterface;
use App\Repositories\CustomerRepository;
use App\Repositories\CustomerRepositoryInterface;
use App\Repositories\OrderRepository;
use App\Repositories\OrderRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\ProductVariationRepository;
use App\Repositories\ProductVariationRepositoryInterface;
use App\Repositories\RoleRepository;
use App\Repositories\RoleRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            RoleRepositoryInterface::class,
            RoleRepository::class
        );
        $this->app->bind(
            AuthRepositoryInterface::class,
            AuthRepository::class
        );
        $this->app->bind(
            BaseCRUDRepositoryInterface::class,
            BaseCRUDRepository::class
        );
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
        $this->app->bind(
            PermissionRepositoryInterface::class,
            PermissionRepository::class
        );
        $this->app->bind(
            AdminRepositoryInterface::class,
            AdminRepository::class
        );
        $this->app->bind(
            AdminAuthRepositoryInterface::class,
            AdminAuthRepository::class
        );
        $this->app->bind(
            AdminRoleRepositoryInterface::class,
            AdminRoleRepository::class
        );
        $this->app->bind(
            AdminPermissionRepositoryInterface::class,
            AdminPermissionRepository::class
        );
        $this->app->bind(
            CustomerRepositoryInterface::class,
            CustomerRepository::class
        );
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );
        $this->app->bind(
            ProductVariationRepositoryInterface::class,
            ProductVariationRepository::class
        );
        $this->app->bind(
            CoupenRepositoryInterface::class,
            CoupenRepository::class
        );
        $this->app->bind(
            OrderRepositoryInterface::class,
            OrderRepository::class
        );


    }
}
