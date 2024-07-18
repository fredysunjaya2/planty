<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        Log::info('Contact form submission received', $request->all());

        $validatedData = $request->validate([
            'email' => 'required|email',
            'type' => 'required|string',
            'message' => 'required|string',
        ]);

        Log::info('Validated data:', $validatedData);

        try {
            Log::info('Attempting to send email');
            Mail::to(env('MAIL_TO_ADDRESS', 'plantyppti@gmail.com'))
                ->send(new ContactFormMail($validatedData));

            Log::info('Email sent successfully');
            return response()->json(['success' => true, 'message' => 'Email sent successfully']);
        } catch (\Exception $e) {
            Log::error('Failed to send email: ' . $e->getMessage(), [
                'exception' => get_class($e),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString(),
                'data' => $validatedData
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Failed to send email: ' . $e->getMessage()
            ], 500);
        }
    }
}
