@extends('layouts.main')

@section('search')
<form action="{{url('/')}}" method="GET" class="flex flex-row items-center">
    @csrf
    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-9/12 border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm 
    focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm w-9/12" placeholder="Pesquise pela tag" type="text" name="search" id="search" />
    <button class="bg-slate-500 hover:bg-slate-400 sm:text-sm p-2 shadow-sm rounded-md text-center ml-2"><ion-icon name="search-outline" class="text-slate-200 "></ion-icon></button>
</form>
@endsection

@section('content')
    <div class="flex flex-col items-center justify-center pb-20 sm:mb-20">
        <div class="w-full  sm:w-10/12  flex flex-wrap justify-start mt-20">
            @foreach ($games as $game )
            <div class="w-5/12 sm:w-[15%] h-2/6 flex flex-col items-center ml-6 sm:ml-20 mb-8 sm:mb-20 hover:scale-110 transition-all duration-500">
                <a href="PageGame/{{$game->id}}">
                    <img class="w-40 h-48" src="../storage/img/games/{{$game->image}}" alt="{{$game->title}}">
                    <div class="w-8/12 w-full flex flex-col mt-4 space-y-4">
                        <span class="label-input text-xs text-white">
                            Título: {{$game->title}}
                        </span>
                        <span class="label-input text-xs text-white">
                            Tags: {{$game->tags}}
                        </span>
                    </div>
                </a>
            </div> 
            @endforeach
            <div class="w-full">
                {{$games->links()}}
            </div>
  
            @if (count($games)== 0 && $search)
            <p class="text-white">Não foi possivel localizar nenhum jogo com a tag: {{$search}}! <a href="{{url('/')}}" class="text-blue-700 hover:text-blue-500">Veja os jogos cadastrados.</a></p>
                @elseif (count($games) == 0)
                <p class="text-white">Não há jogos cadastrados.</p>
            @endif
        </div>
    </div>
@endsection
