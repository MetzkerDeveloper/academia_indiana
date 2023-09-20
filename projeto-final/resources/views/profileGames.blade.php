@extends('layouts.main')

@section('content')
    <div class="w-full flex flex-col items-center justify-center pb-20 sm:mb-20">
        <div class="w-full sm:w-10/12 h-full flex flex-wrap justify-start">
          @foreach ($gamesUser as $gameUser)  
          <div class="w-5/12 sm:w-[15%] h-2/6 flex flex-col items-bet sm:ml-20 sm:mb-10 mb-8 mt-20">
              <img class="w-40 h-48 hover:scale-110 trasition-all duration-500" src="../storage/img/games/{{$gameUser->image}}" alt="">
                <span class="label-input text-white">Titulo: {{$gameUser->title}}</span>
              <div class="flex mt-2 sm:mt-4 space-x-1.5 sm:space-x-4 relative">
                  <a href="editGame/{{$gameUser->id}}" class="absolute"><ion-icon name="create-outline" class="w-8 h-8 hover:scale-125 hover:cursor-pointer transition-all duration-500 text-center bg-yellow-400 p-2 rounded-full z-0" id="edit"></ion-icon></a>
                  <a href="delete/{{$gameUser->id}}" class="absolute left-14"><ion-icon name="trash-outline" class=" w-8 h-8 hover:scale-125 hover:cursor-pointer transition-all duration-500 text-white text-center bg-red-600 rounded-full p-2 z-0" id="trash"></ion-icon></a>
              </div>
          </div>
          @endforeach
          <div class="w-full">
            {{$gamesUser->links()}}
        </div>
        </div>
    </div>
  
@endsection
