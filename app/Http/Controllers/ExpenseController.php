<?php

namespace App\Http\Controllers;
use App\ExpenseReport;
use App\Expense;

use Illuminate\Http\Request;

class ExpenseController extends Controller{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ExpenseReport $expenseReport){
        return view('expense.create', [
            'report' => $expenseReport
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ExpenseReport $expenseReport){

        $expense = new Expense;

        $expense->description = $request->get('description');
        $expense->amount = $request->get('amount');
        $expense->expense_report_id = $expenseReport->id;
        $expense->save();


        return redirect('/expense_reports/' . $expenseReport->id);

    }

}
