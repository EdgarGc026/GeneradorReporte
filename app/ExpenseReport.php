<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseReport extends Model{
    //Tiene muchos expenses
    public function expenses(){
        return $this->hasMany(Expense::class);
    }
}
