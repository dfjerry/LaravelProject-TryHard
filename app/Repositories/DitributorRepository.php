<?php


namespace App\Repositories;


class DitributorRepository extends EloquentRepository
{
    public function getModel()
    {
        // TODO: Implement getModel() method.
        return \App\Distributor::class;
    }
}
