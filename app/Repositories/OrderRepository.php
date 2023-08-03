<?php

namespace App\Repositories;

use App\CRUD\Repositories\BaseCRUDRepository;
use App\Models\Order;

class OrderRepository extends BaseCRUDRepository implements OrderRepositoryInterface
{
    public function setup()
    {
        $this->setModel(Order::class);

        $this->setIndexWiths([]);

        $this->setShowWiths([]);

        $this->setRelated([]);
    }
}
