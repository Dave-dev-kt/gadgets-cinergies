<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <br>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Matricule -->
        <div>
            <x-input-label for="matricule" :value="__('Matricule')" />
            <x-text-input id="matricule" class="block mt-1 w-full" type="text" name="matricule" :value="old('matricule')" required autofocus />
            <x-input-error :messages="$errors->get('matricule')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="w-full justify-center">
                {{ __("Se connecter") }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
