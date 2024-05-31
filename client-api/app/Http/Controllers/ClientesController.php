<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientesController extends Controller
{
    public function index(){
        try {
            $url = env('URL_SERVER_API', 'http://127.0.0.1');
            $response = Http::get($url.'/clients');
            $data = $response->json();
            return view('clientes', compact('data'));
        } catch (\Exception $e) {
            abort(500, 'Ocurrió un error al obtener los clientes');
        }
    }

    public function create(){
        return view('cliente');
    }

    public function store(Request $request){
        try {
            $url = env('URL_SERVER_API', 'http://127.0.0.1');
            $response = Http::post($url. '/clients', [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);
            return redirect()->route('clientes.index');
        } catch (\Exception $e) {
            abort(500, 'Ocurrió un error al guardar el cliente');
        }
    }

    public function delete($idClientes){
        try {
            $url = env('URL_SERVER_API', 'http://127.0.0.1');
            $response = Http::delete($url.'/clients/'.$idClientes);
            return redirect()->route('clientes.index');
        } catch (\Exception $e) {
            abort(500, 'Ocurrió un error al eliminar el cliente');
        }
    }

    public function view($idCliente){
        try {
            $url = env('URL_SERVER_API', 'http://127.0.0.1');
            $response = Http::get($url . '/clients/' . $idCliente);

            if ($response->successful()) {
                $data = $response->json();
                $cliente = $data['Client'];
                return view('clienteView', compact('cliente'));
            } else {
                abort($response->status(), 'Error al obtener datos del cliente');
            }
        } catch (\Exception $e) {
            abort(500, 'Ocurrió un error al obtener datos del cliente');
        }
    }
    public function update(Request $request, $idCliente){ // Agrega $idCliente como parámetro
        try {
            $url = env('URL_SERVER_API', 'http://127.0.0.1');
            $response = Http::put($url. '/clients/'.$idCliente, [ // Utiliza el $idCliente pasado como parámetro
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);
            return redirect()->route('clientes.index');
        } catch (\Exception $e) {
            abort(500, 'Ocurrió un error al guardar el cliente');
        }
    }

}
