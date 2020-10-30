<?php


namespace App\Filters;

class VehicleSortCreationDateFilter
{
    public function filter($builder, $value)
    {
        return $builder->orderBy('createdAt' , $value);
    }
}
