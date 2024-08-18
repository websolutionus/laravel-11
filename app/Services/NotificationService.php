<?php

namespace App\Services;

class NotificationService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    function send($massage, $recipient) {
       return "Notification sent to {$recipient} with message: {$massage}"; 
    }
}
