@extends('layouts.main')

@section('content')
    <div class="flex items-center justify-center h-screen w-full">
        <div class="w-3/12 h-3/5 -mt-30 border border-slate-700 rounded-md">
            <form method="POST" action="{{ route('register') }}" class="flex flex-col items-center">
                <div>
                    <a href="{{ url('/') }}">
                        <img class="w-40 scale-100 mt-3 mb-4" src="../storage/img/logo_nova.png" alt="Logo">
                    </a>
                </div>
                @csrf
                <!-- Name -->
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus
                    autocomplete="name" placeholder="Nome" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                <!-- Email Address -->
                <x-text-input id="email" type="email" name="email" :value="old('email')" required
                    autocomplete="username" placeholder="E-mail" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <!-- Password -->
                <x-text-input id="password" class="form-control rounded-pill" type="password" name="password" required
                    autocomplete="new-password" placeholder="Senha" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <!-- Confirm Password -->
                <x-text-input id="password_confirmation" type="password" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Confirme Senha" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                <div class="flex justify-around items-center w-full">
                    <div class="text-slate-500 hover:text-slate-300 mt-4">
                        <a class="" href="{{ route('login') }}">
                            {{ __('Já é cadastrado?') }}
                        </a>
                    </div>
                    <div>
                        <x-primary-button>
                            {{ __('Cadastrar') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
