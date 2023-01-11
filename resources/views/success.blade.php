<x-app-layout>
    <form action="{{ route('print',['matriculeAgent'=> $agent[0]->matricule]) }}" target="_blank" method="GET">
        @csrf
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <svg class="w-full justify-center my-10" fill="#164b26" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve" stroke="#164b26" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon points="211.344,306.703 160,256 128,288 211.414,368 384,176 351.703,144 "></polygon> <path d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z">
                    </path>
                    </g>
                </svg>
            </div>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <h2 class="text-lg w-full py-5 text-center">Votre procédure a été enregistrée avec succès</h2>
                <br>
                <x-primary-button class="w-full justify-center">
                    <a class="w-full justify-center" href="{{ route('print',['matriculeAgent'=> $agent[0]->matricule]) }}" target="_blank">{{ __("Imprimer le coupon") }}</a>
                </x-primary-button>
            </div>
        </div>
    </form>
</x-app-layout>
