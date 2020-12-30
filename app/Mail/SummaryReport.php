<?php

namespace App\Mail;

use App\ExpenseReport;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SummaryReport extends Mailable{
    use Queueable, SerializesModels;
    private $expenseReport;

    public function __construct(ExpenseReport $expenseReport){
        $this->expenseReport = $expenseReport;
    }

    public function build(){
        return $this->view('mail.expenseReport', [
            'report' => $this->expenseReport
        ]);
    }
}
