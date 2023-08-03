<?php

namespace App\Repositories;

use App\CRUD\Repositories\BaseCRUDRepository;
use App\Models\ProductVariation;

class ProductVariationRepository extends BaseCRUDRepository implements ProductVariationRepositoryInterface
{
    public function setup()
    {
        $this->setModel(ProductVariation::class);

        $this->setIndexWiths([]);

        $this->setShowWiths([]);

        $this->setRelated([]);
    }
}
