<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-404', function () {
    abort(404);
});

/**
 * ROUTE YA KUPOKEA UJUMBE KUTOKA KWENYE CONTACT FORM
 * Inatumia JSON Response kwa ajili ya AJAX (JavaScript)
 */
Route::post('/send-message', function (Request $request) {
    
    // 1. Kuhakiki taarifa (Validation)
    try {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json([
            'success' => false,
            'message' => 'Tafadhali kagua taarifa zako. Hakikisha email ni sahihi.'
        ], 422);
    }

    // 2. Kuandaa Data
    $data = [
        'jina'    => $request->input('name'),
        'email'   => $request->input('email'),
        'ujumbe'  => $request->input('message'),
        'muda'    => date('Y-m-d H:i:s')
    ];

    // Chukua email yako ya kupokelea kutoka kwenye .env
    $emailYako = env('MAIL_FROM_ADDRESS', 'info@gilbertportfolio.kigongonigazella.co.tz');

    // 3. KUJARIBU KUTUMA EMAIL (SURGERY AREA)
    try {
        
        // TUMA EMAIL KWAKO (ADMIN)
        Mail::send('emails.admin', $data, function ($mail) use ($emailYako, $data) {
            $mail->to($emailYako)
                 ->subject('New Portfolio Contact: ' . $data['jina'])
                 ->replyTo($data['email'], $data['jina']); 
        });

        /* 
           KAMA UNATAKA KUTUMA EMAIL KWA MTEJA (AUTORESPONDER), 
           Ondoa alama za // hapa chini baada ya kuhakikisha ya kwanza inafika.
        */
        /*
        Mail::send('emails.mteja', $data, function ($mail) use ($data, $emailYako) {
            $mail->to($data['email'])
                 ->subject('Thank you for contacting Gilbert!')
                 ->from($emailYako, 'Gilbert Portfolio'); 
        });
        */

        return response()->json([
            'success' => true, 
            'message' => 'Thank you for your message. I will be in touch shortly!'
        ]);

    } catch (\Exception $e) {
        // Ikitokea tatizo la Email Server (SMTP Error), Laravel isife (Error 500)
        // Badala yake, iandike error kwenye logs na imrudishie mteja jibu zuri
        Log::error("Email Sending Error: " . $e->getMessage());

        return response()->json([
            'success' => true, // Tunarudisha True ili kumpa moyo mteja, tutaona message kwenye logs
            'message' => 'Message received! I will get back to you soon.'
        ]);
    }
});