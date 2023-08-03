<?php

namespace App\Repositories;

interface ProductVariationRepositoryInterface
{
    /**
     * Get's all Product Profiles.
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
     * Get's a Product Profile by it's ID
     *
     * @param string
     */
    public function get($id);

    /**
     * Creates a Product Profile.
     *
     * @param array
     */
    public function create(array $data);

    /**
     * Updates a Product Profile.
     *
     * @param int
     * @param array
     */
    public function update($id, array $data);

    /**
     * Deletes a Product Profile.
     *
     * @param int
     */
    public function delete($id);
}
