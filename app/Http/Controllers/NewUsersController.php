<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewUsers;


class NewUsersController extends Controller
{
    public function create(Request $request){
        $info = new NewUsers();
        $info-> name = $request->input("name");
        $info-> email = $request->input("email");
        $info-> phone = $request->input("phone");
        $info->save();
        $mensaje = ["mensaje"=>"Save new user"];
        return response()->json($mensaje);

    }//
    public function getUser(Request $request)
    {
        if (!$request->ajax()) return redirect('/');

        $buscar = $request->buscar;
        $criterio = $request->criterio;
        
    
            $accesorio = NewUsers::all();
   

        return ['users' => $users];
    }
}
