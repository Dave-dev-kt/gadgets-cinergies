<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

            <div>
                <p class="text-center">Vos informations : </p><br>
                <ul class="max-w-md space-y-1  list-inside dark:text-gray-400">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Matricule : {{ $agentPrincipal[0]->matricule }}
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Nom et prénoms : {{ $agentPrincipal[0]->nom }} {{ $agentPrincipal[0]->prenoms }}
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Numero de telephone :  {{ $agentPrincipal[0]->numero_telephone }}
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Email :  {{ $agentPrincipal[0]->email }}
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        Categorie :  {{ $agentPrincipal[0]->libelle }}
                    </li>
                </ul>
                <br>
                <p class="text-center">Les infos de l'agent mandaté : </p><br>
                <p>Matricule : {{ $agentMandate[0]->matricule }}</p>
                <p>Nom et prénoms : {{ $agentMandate[0]->nom }} {{ $agentMandate[0]->prenoms }}</p>
                <p>Numero de telephone :  {{ $agentMandate[0]->numero_telephone }}</p>
                <p>Email :  {{ $agentMandate[0]->email }}</p><br>

                <p class="text-center">Voici les gadgets qui vous sont destinés : </p><br>
                @foreach ($agentPrincipal as $agent)
                    <p> - {{ $agent->designation }} (x{{ $agent->quantite }})</p>
                @endforeach
                <br>
                <x-primary-button class="w-full justify-center">
                    <a class="w-full justify-center" href="{{ route('sendMail',['matriculeAgent' => $agentPrincipal[0]->matricule,'matriculeMandate' => $agentMandate[0]->matricule ]) }}">{{ __("Valider") }}</a>
                </x-primary-button>
            </div>
        </div>
    </div>
</x-app-layout>
