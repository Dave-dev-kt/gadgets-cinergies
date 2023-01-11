<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\gadgets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class DownloadPDF extends Controller
{
    public function print(Request $request)
    {
        $matriculeAgent = $request->query('matriculeAgent');
        $matriculeMandate = $request->query('matriculeMandate');
        if ($matriculeMandate == null) {
            $agents = gadgets::join('categories', 'gadgets.categorie_id', '=', 'categories.id')
                ->join('agents', 'categories.agent_id', '=', 'agents.id')
                ->where('agents.matricule', '=', $matriculeAgent)
                ->get();
            $pdf = PDF::loadView('pdf.pdfSelf', compact('agents'))->setPaper('a4', 'landscape');
            return $pdf->stream();
        } else if ($matriculeAgent && $matriculeMandate != null) {
            $agentPrincipal = gadgets::join('categories', 'gadgets.categorie_id', '=', 'categories.id')
                ->join('agents', 'categories.agent_id', '=', 'agents.id')
                ->where('agents.matricule', '=', $matriculeAgent)
                ->get();
            $agentMandate = Agent::where('matricule', '=', $matriculeMandate)->get();
            $pdf = PDF::loadView('pdf.pdfProcuration', compact('agentPrincipal', 'agentMandate'))->setPaper('a4', 'landscape');
            return $pdf->stream();
        }
    }
}
