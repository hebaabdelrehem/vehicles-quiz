<?php

namespace App\Models;

use App\Filters\VehicleFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';
    protected $fillable = [
        'name',
        'plate_number',
        'imei',
        'vin',
        'year',
        'license'
    ];

    public function services()
    {
        return $this->hasMany('App\Models\Service');
    }
    public function fuelEntries()
    {
        return $this->hasMany('App\Models\FuelEntry');
    }
    public function insurancePayments()
    {
        return $this->hasMany('App\Models\InsurancePayment');
    }



}
