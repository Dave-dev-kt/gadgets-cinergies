<x-guest-layout>
    <br>
    <div>
        <h2 class="text-lg w-full py-5 text-center">Matricule incorrect</h2>
        <br>
        <x-primary-button class="w-full justify-center">
            <a class="w-full justify-center" href="{{ route('procurationGadget',['matricule' => $matriculeAgent]) }}">
                Retour
            </a>
        </x-primary-button>
    </div>
</x-guest-layout>
