<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\gadgets;
use Illuminate\Http\Request;


class GadgetController extends Controller
{
    public function index(Request $request)
    {
        $matricule = $request->query('matricule');
        $agents = gadgets::join('categories', 'gadgets.categorie_id', '=', 'categories.id')
            ->join('agents', 'categories.agent_id', '=', 'agents.id')
            ->where('agents.matricule', '=', $matricule)
            ->get();
        /*         $nom_agent = $agents->map(fn ($agent) => $agent->nom);
        $prenoms_agent = $agents->map(fn ($agent) => $agent->prenoms);
        $age_agent = $agents->map(fn ($agent) => $agent->age);
        dd($nom_agent, $prenoms_agent, $age_agent); */
        return view('selfgadget', compact('agents'));
    }

    public function procuration(Request $request)
    {
        $matricule = $request->query('matricule');
        $agent = Agent::where('matricule', '=', $matricule)->get();
        $agents = Agent::all()->whereNotIn('matricule', $matricule);
        return view('procurationgadget', compact('agent', 'matricule', 'agents'));
    }

    public function procurationConfirm(Request $request)
    {
        $matriculeAgent = $request->matriculeAgent;
        $matriculeMandate = $request->matriculeMandate;
        $agentPrincipal = gadgets::join('categories', 'gadgets.categorie_id', '=', 'categories.id')
            ->join('agents', 'categories.agent_id', '=', 'agents.id')
            ->where('agents.matricule', '=', $matriculeAgent)
            ->get();
        $agentMandate = Agent::where('matricule', '=', $matriculeMandate)->get();
        if ($agentMandate->isEmpty()) {
            return response()->view('errorMatriculeAgentMandate', compact('matriculeAgent'));
        }
        return view('procuration_confirm', compact('agentPrincipal', 'agentMandate'));
    }
}
