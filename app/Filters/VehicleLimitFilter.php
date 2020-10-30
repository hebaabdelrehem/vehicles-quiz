<?php


namespace App\Filters;

class VehicleLimitFilter
{
    public function filter($builder, $value)
    {
        return $builder->Limit($value);
    }
}
