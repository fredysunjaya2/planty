<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestEmail extends Command
{
    protected $signature = 'email:test';
    protected $description = 'Send a test email';

    public function handle()
    {
        $this->info('Attempting to send a test email...');

        try {
            Mail::raw('This is a test email from Planty Care.', function($message) {
                $message->to(env('MAIL_TO_ADDRESS', 'plantyppti@gmail.com'))
                        ->subject('Test Email from Planty Care');
            });

            $this->info('Test email sent successfully!');
        } catch (\Exception $e) {
            $this->error('Failed to send test email: ' . $e->getMessage());
            $this->error('Stack trace: ' . $e->getTraceAsString());
        }
    }
}
