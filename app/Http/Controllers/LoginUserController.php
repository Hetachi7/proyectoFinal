<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function Recuperar()
    {
        return view('Recuperar');
    }
    public function login()
    {
        return view('iniciodesesion');
    }
    
    public function inicio(Request $request)
    {
       
      
        $credentials = $request->only('email', 'password');

        $apiUrl = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        // Enviar solicitud POST a la API logins
        $response = Http::post($apiUrl . 'login', $credentials);
        $data = $response->json();
        if ($response->successful() && isset($data['accessToken'])) {
       
            $request->session()->put('auth_token', $data['accessToken']);
        }
        return view ('index');
    
}
    public function store(Request $request)
    {
        

        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/api/');

        $response = Http::post($url.'login',[

            'email' => $request->email,
            'password'=>$request->password

        ]);
       

        return Redirect()->route('iniciodesesion'); 
    }

    public function iniciar(LoginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
           return redirect()->to('/login')->withErrors('Error');
           //return redirect('Error');
        }
       
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        
        Auth::login($user);
        return $this->authenticated($request, $user);

        }
        public function authenticated(Request $request, $user){
            return redirect('/contenido');
    }

    

    public function crear()
    {
        return view('relacion');
    }
}
