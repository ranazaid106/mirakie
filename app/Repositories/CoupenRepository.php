<?php

namespace App\Repositories;

use App\CRUD\Repositories\BaseCRUDRepository;
use App\Models\Coupen;

class CoupenRepository extends BaseCRUDRepository implements CoupenRepositoryInterface
{
    public function setup()
    {
        $this->setModel(Coupen::class);

        $this->setIndexWiths([]);

        $this->setShowWiths([]);

        $this->setRelated([]);
    }
}
