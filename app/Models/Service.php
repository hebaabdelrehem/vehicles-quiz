<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $fillable = [
        'vehicle_id',
        'start_date',
        'end_date',
        'invoice_number',
        'purchase_order_number',
        'status',
        'discount',
        'tax',
        'total'
    ];
    public function vehicle()
    {
        return $this->belongsTo('App\Models\Vehicle');
    }

}
