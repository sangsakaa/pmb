<x-guest-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <center>
            <img src="{{asset('img/logo.png')}}" width="100" alt="">
            <p class=" dark:text-red-600 font-semibold">PMB UNIWA</p>
        </center>
        <x-auth-validation-errors class="mb-2" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-1">


                <!-- Nama -->
                <div class="space-y-2">
                    <x-form.label for="name" :value="__('Nama Lengkap')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="name" class="block w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="{{ __('Nama Lengkap') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>
                <!-- NIK -->
                <div class="space-y-2">
                    <x-form.label for="name" :value="__('Nomor Induk Penduduk')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="name" class="block w-full" type="text" name="nomor_induk_penduduk" :value="old('nomor_induk_penduduk')" required autofocus placeholder="{{ __('Nomor Induk Penduduk') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>
                <!-- Password -->
                <div class="space-y-2">
                    <x-form.label for="password" :value="__('Password')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="password" class="block w-full" type="password" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Confirm Password -->
                <div class="space-y-2">
                    <x-form.label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="password_confirmation" class="block w-full" type="password" name="password_confirmation" required placeholder="{{ __('Confirm Password') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>



                <!-- Email Address -->
                <div class="space-y-2">
                    <x-form.label for="email" :value="__('Email')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="email" class="block w-full" type="email" name="email" :value="old('email')" required placeholder="{{ __('Email') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>


                <!-- file Uploud -->
                <div class="space-y-2">
                    <x-form.label for="name" :value="__('Bukti Pembayar : Foto ,PDF Max : 1 MB')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="name" class="block w-full" type="file" name="file" :value="old('name')" autofocus placeholder="{{ __('Nama Lengkap') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>
                <div class="space-y-2">
                    <x-form.label for="name" :value="__('Bukti Identitas Pribadi : KTP -  Max : 1 MB ')" />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input withicon id="name" class="block w-full" type="file" name="file_ktp" :value="old('name')" autofocus placeholder="{{ __('Nama Lengkap') }}" />
                    </x-form.input-with-icon-wrapper>
                </div>

                <div>
                    <x-button class="justify-center w-full gap-2">
                        <x-heroicon-o-user-add class="w-6 h-6" aria-hidden="true" />

                        <span>{{ __('Register') }}</span>
                    </x-button>
                </div>

                <p class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Already registered?') }}
                    <a href="{{ route('login') }}" class="text-blue-500 hover:underline">
                        {{ __('Login') }}
                    </a>
                </p>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>