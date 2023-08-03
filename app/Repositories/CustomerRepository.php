<?php

namespace App\Repositories;

use App\CRUD\Repositories\BaseCRUDRepository;
use App\Models\Customer;

class CustomerRepository extends BaseCRUDRepository implements CustomerRepositoryInterface
{
    public function setup()
    {
        $this->setModel(Customer::class);

        $this->setIndexWiths([]);

        $this->setShowWiths([]);

        $this->setRelated([]);
    }
}
