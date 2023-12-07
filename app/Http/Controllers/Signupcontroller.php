<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

use function Laravel\Prompts\password;

class Signupcontroller extends Controller
{
    public function show(){
        return view('Registro');
    }
    public function register(Request $request)
{
  
    $url = env('URL_SERVER_API', 'http://127.0.0.1:8000');

    $response = Http::post($url . 'register', [
        'user' => $request->user,
        'email' => $request->email,
        'password' => $request->password,
    
    ]);

   
    // Verificar la respuesta de la API
    if ($response->successful()) {
        $data = $response->json();

     
      
        // Almacena el token en la sesión o en las cookies

        // Manejar la respuesta como desees, por ejemplo, redirigir al usuario
        return redirect()->route('iniciosesion');
    } else {
        // Si la solicitud no fue exitosa, manejar el error
        return response()->json(['error' => 'Error al registrar el usuario'], $response->status());
    }
}



    public function showuser(Request $request)
    {
        
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/');

        $response = Http::get($url.'usuarios',
        );
            $data=$response->json();

        return view('sapo',compact('data')); 
    }


    public function registro (Request $request){
        $request-> validate([
            'user'=> 'required|unique:users,usuario',
                'email'=> 'required|unique:users,email',
                'password'=> 'required|min:8',
            
        ]);
    
        $user = new User();
        $user-> usuario=$request->usuario; 
        $user-> email=$request->email; 
        $user-> password=$request->password; 
        $user-> save(); 
        return response()->json(["mensaje" => "usuario registrado correctamente"], 201);
    }



}
