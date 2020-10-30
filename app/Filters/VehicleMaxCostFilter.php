<?php


namespace App\Filters;

class VehicleMaxCostFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('cost', '>',$value);
    }
}
