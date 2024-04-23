<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;

class ClientesController extends Controller
{
    public function index(){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/clients');
        $data = $response->json();
        //customer/mod_create
        return view('client/mod_clientes',compact('data'));
    }

    public function create(){
        return view('client/mod_clientes_creat');
    }

    public function store(Request $request){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::post($url.'/clients',[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return redirect()->route('cliente.index');
    }

    public function delete($idCliente){
        //dd($idCliente); 
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::delete($url.'/clients/'.$idCliente);
        return redirect()->route('cliente.index');
    }
    
    public function view($idCliente){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/clients/'.$idCliente);
        $cliente = $response->json();
        return view('client/mod_clientes_edit', compact('cliente'));
    }

    public function update(Request $request){
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::put($url.'/clients/'.$request->id,[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return redirect()->route('cliente.index');
    }
}


