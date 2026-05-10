<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-404', function () {
    abort(404);
});

// Route ya kupokea ujumbe na kutuma email zote mbili (BILA KUREFRESH PAGE)
Route::post('/send-message', function (Request $request) {
    // 1. Kuhakiki taarifa zilizotumwa
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    // 2. Kufunga data pamoja kwa ajili ya kuzipeleka kwenye template (views) za email
    $data = [
        'jina' => $request->input('name'),
        'email' => $request->input('email'),
        'ujumbe' => $request->input('message')
    ];

    // Chukua email yako kutoka kwenye .env
    $emailYako = env('MAIL_FROM_ADDRESS', 'gilbertamani29@gmail.com');

    // 3. TUMA EMAIL YA KWANZA -> KWAKO WEWE (ADMIN)
    Mail::send('emails.admin', $data, function ($mail) use ($emailYako, $data) {
        $mail->to($emailYako)
             ->subject('New Portfolio Message: ' . $data['jina'])
             ->replyTo($data['email'], $data['jina']); 
    });

    // 4. TUMA EMAIL YA PILI -> KWA MTEJA (AUTORESPONDER)
    Mail::send('emails.mteja', $data, function ($mail) use ($data, $emailYako) {
        $mail->to($data['email'])
             ->subject('Thank you for your message!') // Ujumbe mzuri wa kiingereza
             ->from($emailYako, 'Gilbert Portfolio'); 
    });

    // 5. Rudisha majibu ya JSON kwa ajili ya JavaScript pop-up
    return response()->json([
        'success' => true, 
        'message' => 'Thank you for your message. I will be in touch shortly!'
    ]);
});