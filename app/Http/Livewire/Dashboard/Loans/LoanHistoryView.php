<?php

namespace App\Http\Livewire\Dashboard\Loans;

use App\Models\Application;
use App\Models\User;
use App\Traits\LoanTrait;
use App\Traits\UserTrait;
use Livewire\Component;

class LoanHistoryView extends Component
{
    use UserTrait, LoanTrait;
    public $loan_requests, $users;

    public function render()
    {
        $this->users = User::role('user')->without('applications')->get();
        $this->loan_requests = Application::where('user_id', auth()->user()->id)
        ->orWhere('status', 3)
        ->whereNot('status', 0)
        ->whereNot('status', 1)
        ->orderBy('id', 'desc')
        ->get();

        return view('livewire.dashboard.loans.loan-history-view')
        ->layout('layouts.dashboard');
    }
}