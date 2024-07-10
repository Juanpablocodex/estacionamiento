<form method="POST" action="{{ route('register') }}" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
    @csrf

    <div>
        <x-input-label for="nombre_completo" :value="__('Nombre Completo')" />
        <x-text-input id="nombre_completo" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="text" name="nombre_completo" :value="old('nombre_completo')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('nombre_completo')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="email" :value="__('Correo Electrónico')" />
        <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="matricula_estudiantil" :value="__('Matrícula Estudiantil')" />
        <x-text-input id="matricula_estudiantil" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="text" name="matricula_estudiantil" :value="old('matricula_estudiantil')" required />
        <x-input-error :messages="$errors->get('matricula_estudiantil')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="matricula_vehiculo" :value="__('Matrícula Vehículo')" />
        <x-text-input id="matricula_vehiculo" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="text" name="matricula_vehiculo" :value="old('matricula_vehiculo')" required />
        <x-input-error :messages="$errors->get('matricula_vehiculo')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="color" :value="__('Color')" />
        <x-text-input id="color" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="text" name="color" :value="old('color')" required />
        <x-input-error :messages="$errors->get('color')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="año" :value="__('Año')" />
        <x-text-input id="año" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="number" name="año" :value="old('año')" required />
        <x-input-error :messages="$errors->get('año')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="password" name="password" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        <x-text-input id="password_confirmation" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="password" name="password_confirmation" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ml-4">
            {{ __('Register') }}
        </x-primary-button>
    </div>
</form>
