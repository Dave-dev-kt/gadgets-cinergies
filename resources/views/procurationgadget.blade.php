<x-guest-layout>
    <form action="{{ route('procurationConfirm',['matricule' => $matricule]) }}">
        <div>
            <x-input-label for="matriculeAgent" :value="__('Votre matricule')" />
            <x-text-input readonly id="matriculeAgent" class="block mt-2 w-full" type="text" name="matriculeAgent" :value="$matricule"/>

            <x-input-label for="matriculeMandate" :value="__('Matricule de l\'agent mandaté')" />
            <x-text-input id="matriculeMandate" class="block mt-1 w-full" type="text" name="matriculeMandate" :value="old('matriculeMandate')" required/>

            {{-- <x-input-label for="matriculeAgent" :value="__('Matricule du mandaté')" />
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach ($agents as $agent)
                    <option id="" value="{{ $agent->matricule }}">{{ $agent->nom }} {{ $agent->prenoms }}</option>
                @endforeach
            </select> --}}
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="w-full justify-center">
                {{ __("Valider") }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
