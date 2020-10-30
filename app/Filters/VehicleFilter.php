<?php



namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class VehicleFilter extends AbstractFilter
{
    /*
     * list of available filters
     */
    protected $filters = [
        'type' => VehicleTypeFilter::class,
        'name' => VehicleNameFilter::class,
        'max_cost' => VehicleMaxCostFilter::class,
        'min_cost' => VehicleMinCostFilter::class,
        'max_creation_date' => VehicleMaxCreationDateFilter::class,
        'min_creation_date' => VehicleMinCreationDateFilter::class,
        'cost' => VehicleSortCostFilter::class,
        'creation_date' => VehicleSortCreationDateFilter::class,
        'limit' => VehicleLimitFilter::class,
    ];

}
