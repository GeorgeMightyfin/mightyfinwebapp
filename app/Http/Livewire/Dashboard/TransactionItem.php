<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Transaction;
use App\Traits\LoanTrait;

class TransactionItem extends Component
{

    use LoanTrait;
    public $transactions, $open_loan;
    public function render()
    {

        $this->open_loan = $this->getCurrentLoan();
        $this->transactions = Transaction::with('application.user')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')->get();
        return view('livewire.dashboard.transaction-item')
            ->layout('layouts.dashboard');
    }
}