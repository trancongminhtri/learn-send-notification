<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\InvoicePaid;

class InvoicePaidController extends Controller
{
   public function sendTestNotification(){
        $user = User::first();

        $enrollmentData = [
            'body' => 'You received an new test notification',
            'enrollmentText' => 'You are allowed to enroll',
            'url' => url('/'),
            'thankyou' => 'You have 14 days to enroll'
        ];

        $user->notify(new InvoicePaid($enrollmentData));
   }
}
