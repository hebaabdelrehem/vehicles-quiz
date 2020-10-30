<?php
namespace App\Repositories\Vehicle;


use App\Models\ExpensesList;
use App\Repositories\Vehicle\VehicleInterface as VehicleInterface;
use App\Models\Vehicle;


class VehicleRepository implements VehicleInterface
{
    public $vehicle;
    public $expensesList;

    /**
     * VehicleRepository constructor.
     * @param ExpensesList $expensesList
     */

    function __construct(ExpensesList $expensesList) {
        $this->expensesList = $expensesList;
    }

    /**
     * @param $filters
     * @return mixed
     */
    public function getAll($filters)
    {
        return $this->expensesList->filter($filters)->get();
    }

}
