<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailRelationshipManager;
use App\Models\RelationshipManager;

class MailController extends Controller
{
    public function mailRelationshipManager(Request $request, $id)
    {
        $manager = RelationshipManager::findOrFail($id);
       
        Mail::to($manager->email)->send(new MailRelationshipManager($manager, $request));
        return back()->with('success', 'Email Sent Successfully');
    }
}
