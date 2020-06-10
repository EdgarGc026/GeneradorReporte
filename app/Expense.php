<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model{
    //Pertenece a un expense report
    public function expenseReport(){
        return $this->belongsTo(ExpenseReport::class);
    }
}
