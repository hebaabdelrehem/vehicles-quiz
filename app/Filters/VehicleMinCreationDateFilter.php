<?php


namespace App\Filters;

class VehicleMinCreationDateFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('createdAt', '<', $value);
    }
}
