<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * This table is a database view that contains the aggregation data between 4 tables to asset the data filter process and make it easy
 * Why we did this ?
 * 1. Views can hide complexity
 * 2. Views can simplify supporting non-changeable databases
 * Class ExpensesList
 * @package App\Models
 */
class ExpensesList extends Model
{
    use HasFactory;
    protected $table = 'expenses_list';

    /**
     * @param Builder $builder
     * @param $filters
     * @return mixed
     */

    public function scopeFilter(Builder $builder, $filters)
    {

        return $filters->filter($builder);
    }
}
