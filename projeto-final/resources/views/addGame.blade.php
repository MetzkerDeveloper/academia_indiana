@extends('layouts.main')

@section('title', 'addGame')

@section('content')
<div class="w-full h-screen">
<div class="w-full h-1/4 flex items-center">
  <div class="w-full text-center">
    <span class="label-input text-2xl font-semibold text-slate-300 hover:text-gray-400 dark:text-gray-400 dark:hover:text-white">Cadastrar novo jogo</span>
  </div>
</div>
<form action="{{url('addGame')}}" enctype="multipart/form-data" method="POST" class="w-full flex flex-col items-center">
  @csrf
  <div class="w-full h-5/6 flex flex-col sm:flex-row justify-center sm:space-x-4 space-y-4 sm:space-y-0">
    <div class="w-full sm:w-3/12 h-full border border-slate-700 flex flex-col items-center pt-8 space-y-10 rounded-lg pb-9">
      <span class="label-input text-1xl font-semibold text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-white">Informações principais</span>
      <input type="text" name="title" id="title" class="w-10/12 input-form py-4 px-4 rounded-full text-center outline-blue-700" placeholder="Título" required>
      <input type="file" name="image" id="image" class="block w-full text-sm text-slate-400 ml-16
        file:mr-4 file:py-3 file:px-5
        file:rounded-full file:border-0
        file:text-sm file:font-semibold
        file:bg-sky-800 file:text-slate-300
        hover:file:bg-sky-600
    "/>
    </div>
    <div class="w-full sm:w-3/12 h-full border border-slate-700 flex flex-col items-center pt-10 space-y-10 rounded-lg pb-4">
      <span class="label-input text-1xl font-semibold text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-white">Descrição e detalhes</span>
      <textarea class="w-10/12 rounded-lg h-14 outline-blue-700" name="description" id="description" cols="30" rows="2" placeholder="Descrição do jogo" required></textarea>
      <input type="text" name="official_link" id="official_link" class="w-10/12 input-form py-4 px-4 rounded-full text-center outline-blue-700" placeholder="Link Oficial" required>
    </div>
    <div class="w-full sm:w-3/12 h-full border border-slate-700 flex flex-col items-center pt-10 space-y-10 rounded-lg pb-4">
      <span class="label-input text-1xl font-semibold text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-white">Mídia Externa</span>
      <input type="text" name="tags" id="tags" class="w-10/12 input-form py-4 px-4 rounded-full text-center outline-blue-700" placeholder="Tags" required>
      <input type="text" name="video_yt" id="video_yt" class="w-10/12 input-form py-4 px-4 rounded-full text-center outline-blue-700" placeholder="Link Youtube (trecho após o sinal '=')" required>
    </div>
  </div>
  <div class="w-9/12 mt-3 ">
    <input type="submit" name="cadastar" value="Cadastrar jogo" class="w-full input-form py-4 px-4 rounded-full text-center text-slate-200 font-bold bg-slate-700 hover:bg-slate-500 hover:cursor-pointer">
  </div>
</form>
</div>

@endsection