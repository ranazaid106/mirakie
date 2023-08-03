<?php

namespace App\Repositories;

use App\CRUD\Repositories\BaseCRUDRepository;
use App\Models\Product;

class ProductRepository extends BaseCRUDRepository implements ProductRepositoryInterface
{
    public function setup()
    {
        $this->setModel(Product::class);

        $this->setIndexWiths([]);

        $this->setShowWiths([]);

        $this->setRelated([]);
    }
}
