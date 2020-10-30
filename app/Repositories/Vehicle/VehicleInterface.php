<?php
namespace App\Repositories\Vehicle;


interface VehicleInterface {

    /**
     * @param $filters
     * @return mixed
     */
    public function getAll($filters);



}

