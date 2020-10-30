<?php

namespace App\Http\Controllers;

use App\Filters\VehicleFilter;
use App\Repositories\Vehicle\VehicleInterface;


class VehicleController extends Controller
{
    private $vehicleRepository;

    /**
     * VehicleController constructor.
     * @param VehicleInterface $vehicleRepository
     */
    public function __construct(VehicleInterface $vehicleRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
    }

    /**
     * This function used to list the filtered vehicle expenses data by assigning the available list of filters
     * @param VehicleFilter $filters
     * @return mixed
     */
    public function index(VehicleFilter $filters)
    {

        return $this->vehicleRepository->getAll($filters);


    }

}
