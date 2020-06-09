<?php


namespace App\Repositories;



class ProductRepository extends EloquentRepository
{
    public function getModel()
    {
        // TODO: Implement getModel() method.
        return \App\Product::class;
    }
}
