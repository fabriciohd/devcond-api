<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\User;


class UserController extends Controller
{
    public function getInfo($id) {
        $array = ['error' => '', 'user' => []];

        $loggedUser = auth()->user();
        $user = User::find($id);
        if ($user) {
            $array['user'] = [
                'name' => $user['name'],
                'email' => $user['email'] 
            ];

            if ($loggedUser['id'] == $id) {
                $array['user']['cpf'] = $user['cpf'] ;
            }
        } else {
            $array['error'] = 'Usuário não encontrado';
            return $array;
        }

        return $array;
    }

    public function update($id, Request $request) {
        $array = ['error' => ''];

        $loggedUser = auth()->user();
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'cpf' => 'required|digits:11',
        ]);

        if (!$validator->fails()) {
            if ($loggedUser['id'] == $id) {
                User::where('id', $id)->update([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'cpf' => $request->input('cpf'),
                ]);
            } else {
                $array['error'] = 'ID não corresponde ao usuário logado';
                return $array;
            }
        } else {
            $array['error'] = $validator->errors()->first();
            return $array;
        }
        
        return $array;
    }
}
