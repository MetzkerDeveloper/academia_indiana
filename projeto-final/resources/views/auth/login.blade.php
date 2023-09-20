@extends('layouts.main')

@section('content')
    <!-- Centralizar Formulário -->
    <div class="flex items-center justify-center h-screen w-full">
        <div class="w-3/12 h-2/4 -mt-40 border border-slate-700 rounded-md">
        <form method="POST" action="{{ route('login') }}" class="flex flex-col items-center" >
            @csrf
            <div>
                <a href="{{url('/')}}">
                    <img class="w-40 scale-100 mt-3 mb-4" src="../storage/img/logo_nova.png"
                        alt="Logo">
                    </a>
            </div>
            <!-- Endereço de Email -->
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="E-mail"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <!-- Senha -->
            <x-text-input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Senha" />
             <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <!-- Opção Lembrar-me -->
            <div class="block mt-4">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" class="enabled:hover:border-gray-400 disabled:opacity-75" name="remember">
                    <span class="text-slate-500 hover:text-slate-300">{{ __('Lembrar-me') }}</span>
                </label>
            </div>

            <!-- Links e Botão -->
            <div class="flex justify-around items-center w-full">
                <div class="text-slate-500 hover:text-slate-300 mt-4">
                    @if (Route::has('password.request'))
                    {{-- <a href="{{ route('password.request') }}"> --}}
                        {{ __('Esqueceu a Senha?') }}
                    {{-- </a> --}}
                @endif
                </div>
                <div>
                    <x-primary-button>
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

            </div>
        </form>
    </div>
    </div>
@endsection
