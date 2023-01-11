<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Agent;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail(Request $request)
    {
        $matriculeAgent = $request->query('matriculeAgent');
        $matriculeMandate = $request->query('matriculeMandate') ?? null;
        if ($matriculeMandate == null) {

            $agent = Agent::where('matricule', '=', $matriculeAgent)->get();

            Mail::to('davidadjewiz9@gmail.com')->send(new SendMail());
            $agentFind = Agent::where('matricule', '=', $matriculeAgent)->first()->update([
                'is_email_sent' => 1
            ]);
            return view('success', compact('agent'));
        } else if ($matriculeAgent && $matriculeMandate != null) {

            $agentPrincipal = Agent::where('matricule', '=', $matriculeAgent)->get();
            $agentMandate = Agent::where('matricule', '=', $matriculeMandate)->get();
            Mail::to('davidadjewiz9@gmail.com')->send(new SendMail());
            $agentFind = Agent::where('matricule', '=', $matriculeAgent)->first()->update([
                'is_email_sent' => 1
            ]);
            return view('successProcuration', compact('agentPrincipal', 'agentMandate'));
        }
    }
}
