<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Mail\SendMail;
use App\Mail\SendMailProcuration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail(Request $request)
    {
        $matriculeAgent = $request->query('matriculeAgent');
        $matriculeMandate = $request->query('matriculeMandate') ?? null;
        if ($matriculeMandate == null) {

            $agent = Agent::where('matricule', '=', $matriculeAgent)->get();
            $mail = $agent[0]->email;
            $nomPrenoms = $agent[0]->nom . ' ' . $agent[0]->prenoms;
            Mail::to('davidadje070@gmail.com')->send(new SendMail($mail, $nomPrenoms));
            $agentFind = Agent::where('matricule', '=', $matriculeAgent)->first()->update([
                'is_email_sent' => 1
            ]);
            return view('success', compact('agent'));
        } else if ($matriculeAgent && $matriculeMandate != null) {

            $agentPrincipal = Agent::where('matricule', '=', $matriculeAgent)->get();
            $agentMandate = Agent::where('matricule', '=', $matriculeMandate)->get();

            $mailAgent = $agentPrincipal[0]->email;
            $nomPrenomsAgent = $agentPrincipal[0]->nom . ' ' . $agentPrincipal[0]->prenoms;
            $mailAgentMandate = $agentMandate[0]->email;

            Mail::to(config('mail.to.address'))->send(new SendMailProcuration($mailAgent, $nomPrenomsAgent, $mailAgentMandate));
            $agentFind = Agent::where('matricule', '=', $matriculeAgent)->first()->update([
                'is_email_sent' => 1
            ]);
            return view('successProcuration', compact('agentPrincipal', 'agentMandate'));
        }
    }
}
