<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $dados = [
            'email'=>'admin@email.com',
            'name'=>'Gustavo',
            'password'=>bcrypt('123456'),   
        ];
        if(User::where('email', '=', $dados['email'])->count()){
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update();
            echo "usuario alterado";
        }
        else{
            User::create($dados);   
            echo "usuario criado";
        }

    }
}