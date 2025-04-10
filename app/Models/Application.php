<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'lname',
        'fname',
        'email',
        'phone',
        'gender',
        'type',
        'loan_product_id',
        'repayment_plan',
        'amount',
        'interest',
        'payback_amount',

        'glname',
        'gfname',
        'gemail',
        'gphone',
        'g_gender',
        'g_relation',
        'gnrc_no',
        'gdob',
        'gphone2',
        'gphonesp3',
        'gaddress',

        'g2lname',
        'g2fname',
        'g2email',
        'g2phone',
        'g2_gender',
        'g2_relation',

        'nrc_file',
        'tpin_file',
        'business_file',
        'payslip_file',
        'bank_trans_file',
        'bill_file',
        'status',

        'user_id',
        'guest_id',
        'payback_amount',
        'penalty_addition',
        'due_date',
        'can_change',

        'processed_by',
        'approved_by',

        'complete',
        'doa',

        'monthly_payments',
        'maximum_deductable',
        'net_pay_blr', //net before loan recovery
        'net_pay_alr', //net pay after loan recovery
        'service_cost',
        'cust_type',
        'personal_loan_type',
        'age',
        'is_zambian',
        'nationality',
        'continue',
        'is_assigned'
    ];
    protected $appends = [
        'done_by',
        'confirmed_by'
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('withUser', function ($builder) {
            $builder->with('user');
            $builder->with('loan_product');
        });
    }

    public function getDoneByAttribute()
    {
        return User::where('id', $this->processed_by)->first();
    }

    public function getConfirmedByAttribute()
    {
        // must change to loan
        return User::where('id', $this->processed_by)->first();
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function manual_approvers()
    {
        return $this->hasMany(LoanManualApprover::class);
    }

    public function loan()
    {
        return $this->hasOne(Loans::class);
    }
    public function loan_product()
    {
        return $this->belongsTo(LoanProduct::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function loan_scores()
    {
        return $this->hasMany(LoanScore::class);
    }

    public function approvedLoans()
    {
        return $this->hasOne(Loans::class);
    }

    // public function approvalAction(){
    //     return $this->hasMany()
    // }

    // public static function payback($principal, $duration){
    //     // 1 month
    //     if( $duration < 2){
    //         return ($principal * 0.2) + $principal;
    //     }

    //     // 2 to 6 months
    //     if( $duration > 1 && $duration < 7 ){
    //         return ($principal * 0.44) + $principal;
    //     }

    //     // 3 months and above
    //     // if( $duration > 3){
    //     //     return ($principal * 1.44) + $principal;
    //     // }
    // }

    public static function loanProduct($id)
    {
        return LoanProduct::where('id', $id)->first();
    }
    // Pending for approval
    public static function currentApplication()
    {
        return Application::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')->first();
        // ->where('status', 0)->where('complete', 0)->first();
    }

    // Pending for payback
    public static function activeApplication()
    {
        return Application::where('user_id', auth()->user()->id)
            ->where('status', 1)->where('complete', 1)->first();
    }

    public static function payback($loan)
    {
        try {

            if ($loan->amount) {

                // Change the URL or ensure proper DNS resolution
                $apiUrl = 'http://localhost/mfs-admin/api/v2/payback';
                // $apiUrl = 'https://admin.mightyfinance.co.zm/api/payback';

                // dd($apiUrl);
                // Initialize cURL
                $ch = curl_init();

                // Set cURL options
                curl_setopt($ch, CURLOPT_URL, $apiUrl . '?' . http_build_query([
                    'loan' => $loan->id,
                ]));

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                // Add these options to help debug and handle SSL issues
                curl_setopt($ch, CURLOPT_VERBOSE, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Only for testing
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);     // Only for testing

                // Optional: Set timeout
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
                curl_setopt($ch, CURLOPT_TIMEOUT, 30);

                // Execute request and get response
                $response = curl_exec($ch);
                // Better error logging
                if (curl_errno($ch)) {
                    $error = 'cURL Error (' . curl_errno($ch) . '): ' . curl_error($ch);
                    Log::error($error);
                    curl_close($ch);
                    return 0;
                }

                // Log only in development or if debugging
                // Log::info('Payback API Response: ' . $response);

                // Close cURL
                curl_close($ch);

                // Decode JSON response
                $data = json_decode($response, true);

                // Check for JSON decoding errors
                if (json_last_error() !== JSON_ERROR_NONE) {
                    Log::error('JSON decode error: ' . json_last_error_msg() . ' - Response: ' . $response);
                    return 0;
                }

                // dd($data['payback']);
                return $data['payback'] ?? 0;
            }
        } catch (\Throwable $th) {
            dd($th);
            Log::error('Exception in payback function: ' . $th->getMessage());
            // Don't use dd() in production code as it stops execution

            return 0;
        }

        return 0;
    }

    public static function open_balance($loan)
    {

        try {
            if (!$loan->amount) {
                return 0;
            }

            $apiUrl = config('app.env') === 'production'
                ? 'https://admin.mightyfinance.co.zm/api/get-my-loan-balance/' . $loan->id
                : 'http://localhost/mfs-admin/api/get-my-loan-balance/' . $loan->id;

            $ch = curl_init($apiUrl);

            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER    => true,
                CURLOPT_CONNECTTIMEOUT    => 10,
                CURLOPT_TIMEOUT           => 30,
                CURLOPT_FOLLOWLOCATION    => true,
                CURLOPT_SSL_VERIFYPEER    => config('app.env') === 'production',
                CURLOPT_SSL_VERIFYHOST    => config('app.env') === 'production' ? 2 : 0,
                // Optional for debugging
                // CURLOPT_VERBOSE        => true,
            ]);

            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                Log::error('cURL Error (' . curl_errno($ch) . '): ' . curl_error($ch));
                curl_close($ch);
                return 0;
            }

            curl_close($ch);

            $data = json_decode($response, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                Log::error('JSON decode error: ' . json_last_error_msg() . ' - Response: ' . $response);
                return 0;
            }

            return $data ?? 0;
        } catch (\Throwable $th) {
            Log::error('Exception in payback function: ' . $th->getMessage());
            return 0;
        }
        return 0;
    }
    public static function receive_amount($principal, $duration, $product_id = null)
    {
        $discount = $principal * 0.1;
        $finalPayback = $principal - $discount;
        return number_format($finalPayback, 2, '.', '');
    }

    public static function payback_installment($loan)
    {
        try {
            if ($loan->amount) {
                // Change the URL or ensure proper DNS resolution
                $apiUrl = 'http://localhost/mfs-admin/api/v2/monthly';
                // $apiUrl = 'https://admin.mightyfinance.co.zm/api/_monthly-installment';

                // Initialize cURL
                $ch = curl_init();

                // Set cURL options
                curl_setopt($ch, CURLOPT_URL, $apiUrl . '?' . http_build_query([
                    'loan' => $loan->id,
                ]));
                // dd($loan->id);

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                // Add these options to help debug and handle SSL issues
                curl_setopt($ch, CURLOPT_VERBOSE, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Only for testing
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);     // Only for testing

                // Optional: Set timeout
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
                curl_setopt($ch, CURLOPT_TIMEOUT, 30);

                // Execute request and get response
                $response = curl_exec($ch);

                // Better error logging
                if (curl_errno($ch)) {
                    $error = 'cURL Error (' . curl_errno($ch) . '): ' . curl_error($ch);
                    Log::error($error);
                    curl_close($ch);
                    return 0;
                }

                // Log only in development or if debugging
                Log::info('Payback API Response: ' . $response);

                // Close cURL
                curl_close($ch);

                // Decode JSON response
                $data = json_decode($response, true);

                // Check for JSON decoding errors
                if (json_last_error() !== JSON_ERROR_NONE) {
                    Log::error('JSON decode error: ' . json_last_error_msg() . ' - Response: ' . $response);
                    return 0;
                }

                return $data['month'] ?? 0;
            }
        } catch (\Throwable $th) {
            // dd($th);
            Log::error('Exception in payback function: ' . $th->getMessage());
            return 0;
        }
    }

    public static function payback_next_date($application)
    {
        // Assuming $application->created_at is a Carbon instance
        if ($application) {
            try {
                $nextDate = $application->created_at;

                return $nextDate;
            } catch (\Throwable $th) {
                return 'No Date';
            }
        } else {
            return 'No Application';
        }
    }


    public static function interest_amount($principal, $duration)
    {
        //add api call
    }

    public static function interest_rate($product_id)
    {
        $loan_product = LoanProduct::where('id', $product_id)->with([
            'disbursed_by.disbursed_by',
            'interest_methods.interest_method',
            'interest_types.interest_type',
            'loan_accounts.account_payment',
            'loan_status.status',
            'loan_decimal_places'
        ])->first();

        if ($loan_product->interest_types->first()->interest_type->first()->name == 'Percentage') {
            return $loan_product->def_loan_interest . '%';
        } else {
            return 'K ' . $loan_product->def_loan_interest;
        }
    }

    public static function monthly_installment($amount, $duration)
    {
        try {
            $total_collectable = Application::payback($amount, $duration);
            $total = $total_collectable / $duration;
            return number_format($total, 2, '.', '');
        } catch (\Throwable $th) {
            return 0;
        }
    }

    // STATS
    public static function totalLoans()
    {
        return Application::get()->count();
    }
    public static function totalApprovedLoans()
    {
        return Application::where('status', 1)->get()->count();
    }
    public static function totalPendingLoans()
    {
        return Application::where('status', 0)->where('complete', 1)->get()->count();
    }


    // FUNDS
    public static function totalAmountLoans()
    {
        //  Total amount for all loans with complete KYC
        return Application::where('complete', 1)->sum('amount');
    }
    public static function totalAmountLoanedOut()
    {
        //  Total amount for complete and approved loans
        return Application::where('complete', 1)->where('status', 1)->whereNotNull('due_date')->sum('amount');
    }
    public static function totalAmountPending()
    {
        // Total amount for complete and under review / pending approval
        return Application::where('complete', 1)->where('status', [0, 2])->sum('amount');
    }


    // ELIGIBILITY
    public static function loan_assemenent_table($loan)
    {
        $basic_pay = $loan->user->basic_pay; // Clear
        $net_pay = $loan->user->net_pay; //Unclear //Net Pay Before Loan Recovery
        $principal = $loan->amount; // Clear
        $interest = $loan->interest; // Clear
        $total_collectable = Application::payback($loan->amount, $loan->repayment_plan); // Clear
        $payment_period = $loan->repayment_plan; // Clear
        $monthly_payment = Application::monthly_installment($loan->amount, $loan->repayment_plan); // Clear
        $maximum_deductable_amount = $net_pay * 0.75; // Clear
        $net_pay_alr = $net_pay * 0.25;; //Net Pay After Loan Recovery //Clear

        // if($maximum_deductable_amount > 0){
        $credit_score = $monthly_payment < $maximum_deductable_amount;
        // }else{
        //     $credit_score = false;
        // }

        $data = [
            'borrower' => $loan->user->fname . ' ' . $loan->user->lname,
            'basic_pay' => $basic_pay, // Clear
            'net_pay_blr' => $net_pay, //Unclear //Net Pay Before Loan Recovery
            'principal' => $principal, // Clear
            'interest' => $payment_period < 2 ? '20%' : '44%', // Clear
            'total_collectable' =>  $total_collectable, // Clear
            'payment_period' => $payment_period, // Clear
            'monthly_payment' =>  $monthly_payment, // Clear
            'maximum_deductable_amount' => $maximum_deductable_amount, // Clear
            'net_pay_alr' => $net_pay_alr, //Net Pay After Loan Recovery //Clear
            'dob' => $loan->user->dob,
            'doa' => $loan->created_at->toFormattedDateString(), //Date of Application
            'dop' => '',
            'credit_score' => $credit_score
        ];
        return $data;
    }
}