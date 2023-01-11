<x-app-layout>

{{--     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <button>Je réceptionne moi même mes gadgets</button>
                </div>
            </div>
        </div>
    </div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 justify-center">
                    <button>Je réceptionne mes gadgets par procurration</button>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="flex justify-center mt-8 sm:items-end sm:justify-end">
        <button class="bg-orange-300 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-orange-300 rounded">
            <a href="{{ route('monGadget', ['matricule' => $matricule]) }}">Je récupère moi même mes gadgets</a>
        </button>
    </div>
    <div class="flex justify-center mt-8 sm:items-end sm:justify-end">
        <button class="bg-orange-300 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-orange-300 rounded">
            <a href="{{ route('procurationGadget', ['matricule' => $matricule]) }}">Je récupère mes gadgets par proccuration</a>
        </button>
    </div>
</x-app-layout>
