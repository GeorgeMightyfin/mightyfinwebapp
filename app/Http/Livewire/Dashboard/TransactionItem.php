<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Application;
use Livewire\Component;
use App\Models\Transaction;
use App\Traits\LoanTrait;

class TransactionItem extends Component
{

    use LoanTrait;
    public $transactions, $open_loan, $current_loan;
    public function render()
    {
        try {

        $this->current_loan = Application::where('user_id', auth()->user()->id)
            ->where('status', 1)
            ->where('closed', 0)
            ->first();


        // dd($this->current_loan);
        $this->open_loan = $this->getCurrentLoan();
        $this->transactions = Transaction::with('application.user')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')->get();
        return view('livewire.dashboard.transaction-item')
            ->layout('layouts.dashboard');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}