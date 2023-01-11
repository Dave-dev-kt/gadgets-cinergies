<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <img class="max-w-min pb-5 h-20 justify-center" src="{{ url('/images/logocienergies.png') }}">
        <div class="w-full sm:max-w-md mt-6 m px-6 py-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-6">
                <x-primary-button class="w-full justify-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-orange-300 rounded">
                    <a class="w-full justify-center" href="{{ route('monGadget', ['matricule' => $matricule]) }}">Je récupère moi même mes gadgets</a>
                </x-primary-button>
            </div>

            <x-primary-button class="w-full justify-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-orange-300 rounded">
                <a class="w-full justify-center" href="{{ route('procurationGadget', ['matricule' => $matricule]) }}">Je récupère mes gadgets par proccuration</a>
            </x-primary-button>
        </div>
    </div>
</x-app-layout>
