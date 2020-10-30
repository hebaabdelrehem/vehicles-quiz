<?php


namespace App\Filters;

class VehicleSortCostFilter
{
    public function filter($builder, $value)
    {
        return $builder->orderBy('cost' , $value);
    }
}
