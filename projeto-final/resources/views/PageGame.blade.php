@extends('layouts.main')

@section('content')

<div class="w-full  flex items-center justify-center">
  <div class="w-full mt-28 sm:w-6/12 sm:flex hidden">
    <div class="w-4/12 flex items-center justify-center">
      <div class="flex flex-col items-center ml-6 sm:ml-20 mb-8 sm:mb-20 hover:scale-125 transition-all duration-500">
        <img class="w-64 h-48 mt-4" src="/storage/img/games/{{$game->image}}" alt="Imagem Jogo">
    </div>
    </div>
      <div class="label-input w-8/12 flex flex-col mt-4 space-y-4 text-center text-xl text-white">
        <span class="">
          Título: {{$game->title}}
        </span>
        <span>
          Data de Lançamento: {{date('d/m/Y', strtotime($game->created_at))}}
        </span>
        <span>
          Tags: {{$game->tags}}
        </span>
        <span>
          Cadastrado por: {{$autor->name}}
        </span>
    </div>
    <div class="flex items-center justify-center">
        <a href="{{$game->official_link}}" target="_blank" class="bg-slate-500 hover:bg-slate-400 rounded-full p-2 w-24 text-center">Jogar</a>
    </div>
  </div>
  <div class="w-full mt-20 sm:w-6/12 flex flex-wrap sm:justify-center mb-4">
    <iframe width="650" height="300" src="https://www.youtube.com/embed/{{$game->video_yt}}" title="YouTube video player" 
    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="mt-5"></iframe>
  </div>
</div>
<div class="flex flex-col items-center justify-center text-white">
  <span class="label-input text-xl text-center mb-4">Descrição</span>
  <div class="w-10/12">
  <span class="label-input text-xs">
  {{$game->description}}
  </span>
</div>
</div>

@endsection