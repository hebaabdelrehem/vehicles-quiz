<?php

// TypeFilter.php

namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;

class VehicleNameFilter
{
    public function filter($builder, $value)
    {
//        return $builder->where('name', 'LIKE', '%' . $value . '%');
        return $builder->where('vehicleName', 'LIKE', '%' . $value . '%');
    }
}
