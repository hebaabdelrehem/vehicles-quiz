<?php


namespace App\Filters;

class VehicleMaxCreationDateFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('createdAt', '>', $value);
    }
}
