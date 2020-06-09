<?php


namespace App\Repositories;



class CategoryRepository extends EloquentRepository
{
   public function getModel() // hàm lấy model
   {
       // TODO: Implement getModel() method.
       return \App\Category::class;
   }
}
