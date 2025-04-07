<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;
use Exception;
use Illuminate\Http\Request;

trait PawaPayTrait
{

    public function deposit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'network' => 'required',
            // 'phone' => 'required',
            'amount' => 'required',
            'loan_id' => 'required',
        ]);

        try {
            // Generate a UUIDv4 for the depositId
            $depositId = Uuid::uuid4()->toString();

            // Prepare payload for the external API request
            $payload = $this->preparePayload($request, $depositId);

            Log::info($payload);

            // Make the API request
            $response = Http::withHeaders($this->getHeaders())->post('https://api.pawapay.io/deposits', $payload);

            // Check if the request was successful and return the response
            if ($response->successful()) {
                // return response()->json(['message' => 'Payment submitted successfully', 'data' => $response->json()]);
                return true;
            }

            // If unsuccessful, throw an exception with detailed info
            throw new Exception("API request failed with status {$response->status()} and message: " . $response->body());
        } catch (Exception $e) {
            dd($e);
            Log::error('Payment submission failed', [
                'exception' => $e
            ]);
            // Catch any exception and return the detailed error message
            return response()->json(['error' => 'Failed to submit payment', 'details' => $e->getMessage()], 500);
        }
    }

    private function preparePayload($request, string $depositId): array
    {
        return [
            "depositId" => $depositId,
            "amount" => (string)$request->input('amount'),
            "currency" => "ZMW",
            "correspondent" => (string)$request->input('correspondent'),
            "payer" => [
                "address" => [
                    "value" => (string)auth()->user()->phone
                ],
                "type" => "MSISDN"
            ],
            "customerTimestamp" => now()->toIso8601String(),
            "statementDescription" => "Repayment of loan to MFS",
            "country" => "ZMB",
            "preAuthorisationCode" => "PMxQYqfDx",
            "metadata" => [
                [
                    "fieldName" => "orderId",
                    "fieldValue" => (string)$request->input('application_id') // Use the created order ID here
                ],
                [
                    "fieldName" => "customerId",
                    "fieldValue" => (string)$request->input('user_id'),
                    "isPII" => true
                ]
            ]
        ];
    }


    private function getHeaders(): array
    {
        return [
            'Content-Digest' => 'MightyFin Payment Service',
            'Authorization' => 'Bearer eyJraWQiOiIxIiwiYWxnIjoiRVMyNTYifQ.eyJ0dCI6IkFBVCIsInN1YiI6IjkzNSIsImV4cCI6MjA0NDc5MzI2NiwiaWF0IjoxNzI5MjYwNDY2LCJwbSI6IkRBRixQQUYiLCJqdGkiOiIzOTU5NmMyOS02MWJlLTQ2MjMtOTczZS1lMGE3Yzg3MzE0NDgifQ.mhcRvNtSGalGqzWqeqzFopLf1D1kmVxOjWyCb_7jCibrCMlPDbK5HunE7BbtKOYnGSsB_66ovRFsTV8b93xoqg',
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];
    }
}