<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class BemvindoController extends Controller
{
    public function index(){
        // Aqui eu poderia criar uma lógica...
        // Verificar se um usuário existe ou se está autenticado no sistema
        // buscar dados de um usuário, etc..
        $nome = 'Waleriano Metzker';
        $nascimento = '02/03/2000';
        $email = 'walerianoadm@gmail.com';

        $dados =  [
            'nome_apelido'=> $nome,
            'data_nascimento' => $nascimento,
            'conta_email' => $email
        ];
        return view('boasvindas.bemvindo',$dados);
    }

    public function exit(){
        return view('boasvindas.sair');
    }

    public function users(Request $r){
        $dados = [
                 'id'=>$r->id,
                ];

        $user = [ 'user'=> User::find($dados['id'])]; 
        return view('usuarios.usuario',$user);
     
    } 

    public function up(Request $r){
        $dados = ['id'=>$r->id,
                  'nome'=>$r->name,
                  'email'=>$r->email,
                  'senha'=>$r->password,
                 ];
        // var_dump($dados);

        $user = User::find($dados['id']);
        $user->name = $dados['nome'];
        $user->password = $dados['senha'];

        $user->save();
       return redirect('usuarios');
    }

    public function delete(Request $r){
        $user = User::find($r->id);
        $user->delete();
       return redirect('usuarios');
    }

    public function list_users(){
        //Eloquent
        $users = User::all();
        $users =User::paginate(10);

        //Query builder
        //$users = DB::table('users')->get();
        
        $qtde = User::count();

        $dados = ['users' => $users,
                  'qtd_users'=> $qtde
                 ];

                //  dd($users);
                //  dd($qtde);
        return view('usuarios.index',$dados);
    }
    
    public function so(){
        return view('boasvindas.sair');
    }
    
    public function create(Request $r){
        
        if($r->getRequestUri() == '/teste-git/academia_indiana/hello-world/public/cadastrar'){
            
            return view('usuarios.cadastrar');
        }
        else{
          $user = new User;
          $user->email = $r->email;
          $user->name = $r->name;
          $user->password = $r->password;
          $user->save();

          return redirect('usuarios');
        }
        
        
        
    }
}