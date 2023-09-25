<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class GamesController extends Controller
{
    public function index()
    {
        $search = request('search');

        if ($search) {
            $games = DB::table('games')->where('tags', 'like', '%' . $search . '%')->paginate(8);
        } else {
            $games = DB::table('games')->orderBy('id', 'desc')->paginate(8);
        }

        return view('welcome', compact('games', 'search'));
    }

    public function addGame(Request $request)
    {
        if (isset($request->cadastar)) {
            $user = Auth::user();
            $game = new Games;
            $game->title = $request->title;
            // upload imagem
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                $requestImage->move(storage_path('app/public/img/games'), $imageName);
                $game->image = $imageName;
            }
            $game->description = $request->description;
            $game->official_link = $request->official_link;
            $game->tags = $request->tags;
            $game->video_yt = $request->video_yt;
            $game->user_id = $user->id;
            $game->save();

            return redirect('/')->with('success', 'Jogo cadastrado com sucesso!');
        }

        return view('addGame');
    }

    public function gameId(Request $request)
    {
        $game = Games::find($request->id);
        $autor = User::find($game->user_id);

        return view('PageGame', compact('game', 'autor'));
    }

    public function gameUser()
    {
        $user = Auth::user();
        $gamesUser = DB::table('games')->where('user_id', $user->id)->orderBy('id', 'desc')->paginate(8);
        return view('profileGames', compact('gamesUser'));
    }

    public function editGame(Request $request)
    {
        $game = Games::find($request->id);

        if (isset($request->Atualizar)) {
            $game->title = $request->title;
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                unlink(storage_path('app/public/img/games/' . $game->image));
                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                $requestImage->move(storage_path('app/public/img/games'), $imageName);
                $game->image = $imageName;
            }
            $game->description = $request->description;
            $game->official_Link = $request->official_link;
            $game->tags = $request->tags;
            $game->video_yt = $request->video_yt;
            $game->save();
            return redirect('profileGames')->with('edit', 'Jogo atualizado com sucesso!');
        }

        return view('editGame', compact('game'));
    }

    public function deleteGame(Request $request)
    {
        $game = Games::find($request->id);
        unlink(storage_path('app/public/img/games/' . $game->image));
        $game->delete();
        return redirect('/')->with('delete', 'Jogo deletado com sucesso.');
    }
}
