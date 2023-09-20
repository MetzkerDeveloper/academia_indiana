<?php

namespace App\Http\Controllers;

use App\Models\Games;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;


class GamesController extends Controller
{
    public function index()
    {
        $search = request('search');

        if($search){
            $games = DB::table('games')->where('tags', 'like', '%'.$search.'%')->paginate(8);
        }else{
            $games= DB::table('games')->orderBy('id', 'desc')->paginate(8);
        }
                
        $dados= ['games'=> $games, 'search'=>$search];
        
        return view('welcome',$dados);    
    }

    public function addGame(Request $request)
    {
        if(isset($request->cadastar))
        {
            $user = Auth::user();
            $game = new Games;
            $game->title = $request->title;
             // upload imagem
            if($request->hasFile('image') && $request->file('image')->isValid())
            {
                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).'.'.$extension;            
                $requestImage->move(storage_path('img/games'),$imageName);
                $game->image = $imageName;
            }
            $game->description = $request->description;
            $game->official_link = $request->official_link;
            $game->tags = $request->tags;
            $game->video_yt = $request->video_yt;
            $game->user_id = $user->id;
            $game->save();
            
            return redirect('/');
        }

        return view('addGame');
    }

    public function gameId(Request $request)
    {
        $game = Games::find( $request->id);
        $autor = User::find($game->user_id);
        $dados = ['game'=>$game, 
                'autor'=>$autor];
        return view('PageGame', $dados);
    }

    public function gameUser()
    {
        $user = Auth::user();
        $gamesUser = DB::table('games')->where('user_id', $user->id)->orderBy('id', 'desc')->paginate(8);
         return view('profileGames', ['gamesUser'=>$gamesUser]);
    }

    public function editGame(Request $request)
    {
        $game = Games::find( $request->id);

        if(isset($request->Atualizar))
        {
            $game->title = $request->title;
            $game->description = $request->description;
            $game->official_Link = $request->official_link;
            $game->tags = $request->tags;
            $game->video_yt = $request->video_yt;
            $game->save();
            return redirect('profileGames');
        }  

        return view('editGame', ['game'=>$game]);
    }

    public function deleteGame(Request $request)
    {
        $game = Games::find( $request->id);
        unlink(storage_path('img/games/'.$game->image));
        $game->delete();
        return redirect('/');
    }
}