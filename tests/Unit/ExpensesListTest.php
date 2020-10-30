<?php

namespace Tests\Unit;


use Tests\TestCase;

class ExpensesListTest extends TestCase
{

    /**
     * A basic unit test example.
     *
     * @return void
     */

    /** @test */
    public function expenses_list_filter_test_max_cost(){
         $this->get('/public/api/vehicle/expenses/list?max_cost=50')
            ->assertSee(10)
            ->assertSee(30);

    }
    /** @test */
    public function expenses_list_filter_test_type(){
        $this->get('/public/api/vehicle/expenses/list?type[]=fuel')
            ->assertDontSee("service");
    }

}
