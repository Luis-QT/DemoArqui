<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
    	$user = Auth::User();
    	return view('admin.md_configurations.account',[
        'user' => $user,
    	]);
    }

    public function updatePassword(Request $request)
    { 
      $user = Auth::User();
      if(Hash::check($request->oldPassword,$user->userSpecification->password)){
        $user->userSpecification->password = bcrypt($request->newPassword);
        $user->userSpecification->save();
        $obj = (object) array('caso' => 0, 'titulo' => 'Contraseña Modificada !!' ,'texto' => "La contraseña ha sido modificada con exito!");
        return json_encode($obj);
      }else{
        $obj = (object) array('caso' => 1, 'titulo' => 'Contraseña incorrecta !!' ,'texto' => "La contraseña que ha ingresado es incorrecta.");
        return json_encode($obj);
      }
    }

}
