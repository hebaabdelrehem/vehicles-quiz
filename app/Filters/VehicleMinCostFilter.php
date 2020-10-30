<?php


namespace App\Filters;

class VehicleMinCostFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('cost', '<',$value);
    }
}
