<?php


namespace App\Repositories\Admin;


interface AuthRepositoryInterface
{
    /**
     * @param $data
     * @return mixed
     */
    public function  forgot($data);

    /**
     * @param $data
     * @return mixed
     */
    public function optVerify($data);
    /**
     * @param $data
     * @return mixed
     */
    public function resetPassword($data);

    public function attempt($credentials);
}
