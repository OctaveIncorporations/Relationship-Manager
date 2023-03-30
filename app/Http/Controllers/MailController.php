<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailRelationshipManager;

class MailController extends Controller
{
    public function FunctionName(Request $request, $email)
    {
        $mailData = [
            'email' => decrypt($email),
            'subject' => $request->input('subject'),
            'body' => $request->input('body'),
        ];
        Mail::to($mailData['email'])->send(new MailRelationshipManager($mailData));
        return to_route('client.profile');
    }
}
