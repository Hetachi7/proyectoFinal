<?php

namespace App\Http\Controllers;

use App\Models\Imagen_Hsitoria;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CreateHistoryController extends Controller
{
    public function Formulario(){
        return view('formularioHistoria');
    }
    public function CreateHistory(){
        return view('subirhistoria');
    }
    public function preview(){
        return view('preview');
    }
    
   
    public function crearHistoria(Request $request)
    {
        $request->validate([
            'texto' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Procesar el texto
        $texto = $request->input('texto');

        // Procesar la imagen si está presente
        $imagenPath = null;
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('public/imagenes');
        }

        // Datos a enviar a la API
        $data = [
            'texto' => $texto,
            'imagen' => $imagenPath,
        ];

        // Enviar datos a la API
        try {
            $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/');
            $response = Http::post($url . 'chistorias', $data);

            // Verificar la respuesta de la API
            if ($response->successful()) {
                return redirect()->back()->with('success', 'Historia creada con éxito');
            } else {
                return redirect()->back()->withErrors('Error al enviar la historia a la API');
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error al enviar la historia a la API');
        }
    }
    public function consumirApiMostrarHistorias()
{
    try {
        $url = env('URL_SERVER_API', 'http://127.0.0.1:8000/');
        $response = Http::get($url.'mostrarh');

        $historias = $response->json();

        // Aquí puedes manejar las historias como desees
        // Por ejemplo, pasarlas a una vista
        return view('nombre_de_la_vista', compact('historias'));
    } catch (\Exception $e) {
        // Manejar errores de la solicitud
        return redirect('/')->withErrors('Error al consumir la API de historias');
    }
}
}
    
   
