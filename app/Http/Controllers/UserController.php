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
        $array['user'] = [
            'name' => $user['name'],
            'email' => $user['email'] 
        ];

        if ($loggedUser['id'] == $id) {
            $array['user']['cpf'] = $user['cpf'] ;
        }        

        return $array;
    }
}
