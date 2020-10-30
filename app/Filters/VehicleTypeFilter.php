<?php

// TypeFilter.php

namespace App\Filters;
use Illuminate\Database\Eloquent\Builder;

class VehicleTypeFilter
{
    public function filter($builder, $value)
    {

        return $builder->wherein('type',  $value);
//        return $builder->leftJoin('fuel_entries','fuel_entries.vehicle_id','=','vehicles.id')->where('fuel_entries.cost','>',$value)->select('vehicles.*','fuel_entries.cost');
    }
}
