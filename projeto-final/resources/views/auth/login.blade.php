@extends('layouts.main')

@section('content')
    <!-- Centralizar Formulário -->
    <div class="flex items-center justify-center h-screen w-full">
        <div class="w-3/12 h-auto -mt-40 border border-slate-700 rounded-md">
        <form method="POST" action="{{ route('login') }}" class="flex flex-col items-center" >
            @csrf
            <div class="mt-2 mb-2">
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
            <hr class="mt-4 mb-5 border border-slate-700 w-full">
            <div class="w-full mb-5">
             <a href="{{route('login.social.redirect', ['driver'=> 'google'])}}"  class="flex items-center ml-4 text-slate-600 hover:text-slate-400 mb-4">
                 <img  class=" w-8 h-8 bg-white rounded-full border-transparent hover:scale-125 hover:cursor-pointer transition-all duration-500 mr-2"
                       src="/storage/img/google.png" alt="Github"> Login with Google
             </a>
     
             <a href="{{route('login.social.redirect', ['driver'=> 'github'])}}"  class="flex items-center ml-4 text-slate-600 hover:text-slate-400">
                 <img  class=" w-8 h-8 bg-white rounded-full border-transparent hover:scale-125 hover:cursor-pointer transition-all duration-500 mr-2"
                       src="/storage/img/github.png" alt="Github"> Login with GitHub
             </a>
            </div>
        </form>
      
    </div>
    </div>
@endsection
