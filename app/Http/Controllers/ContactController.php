<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Mailer\Exception\UnexpectedResponseException;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // 1. VALIDATION: Jina sasa ni herufi 3 (at least)
        $request->validate([
            'name'    => 'required|string|min:3|max:255',
            'email'   => 'required|email:rfc,dns,spoof|max:255',
            'message' => 'required|string|min:10',
        ], [
            // Custom Messages kwa Kiingereza safi
            'name.required'    => 'Your name is required.',
            'name.min'         => 'Please provide a valid name (at least 3 characters).',
            'email.required'   => 'We need your email address to contact you.',
            'email.email'      => 'This email address format is not valid.',
            'message.required' => 'Please type a message before sending.',
            'message.min'      => 'Your message is too short. Please use at least 10 characters.',
        ]);

        $data = [
            'jina'   => $request->name,
            'email'  => $request->email,
            'ujumbe' => $request->message
        ];

        try {
            // STEP 1: Jaribu kutuma kwa Mteja (Hii itakamata email ambazo Domain zake ni feki au seva zimekataa)
            Mail::send('emails.mteja', $data, function ($message) use ($data) {
                $message->to($data['email'])
                        ->subject('Message Received - Gilbert Portfolio');
            });

            // STEP 2: Tuma kwako (Gilbert)
            Mail::send('emails.admin', $data, function ($message) use ($data) {
                $message->to('info@gilbertportfolio.kigongonigazella.co.tz')
                        ->subject('ðŸ”¥ New Portfolio Inquiry: ' . $data['jina'])
                        ->replyTo($data['email'], $data['jina']);
            });

            return response()->json([
                'success' => true,
                'message' => "Message received! Thank you for your interest; expect a response from me shortly."
            ]);

        } catch (UnexpectedResponseException $e) {
            Log::error("SMTP 550 Error: " . $data['email']);
            return response()->json([
                'success' => false,
                'message' => "The email address does not exist or cannot receive mail. Please use a valid address."
            ], 422);

        } catch (\Exception $e) {
            Log::error("Mail System Failure: " . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => "Sorry, we encountered a technical issue. Please try again later."
            ], 500);
        }
    }
}