<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Dotenv\Repository\RepositoryInterface;
use Illuminate\Contracts\Filesystem\Cloud;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    
    public function index()
    {
        // 
        $clients = Client::all();
        $array=[];
        foreach ($clients as $client){
            $array[]=[
                'id' => $client->id,
                'name' => $client->name,
                'email' => $client->email,
                'phone' => $client->phone,
                'address' => $client->address,
                'Services' => $client->services,

            ];

        }
        return response()->json($array);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
        $client = new Client;
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->save();
        $data = [
            'message' => 'Client created successfully',
            'client' => $client
        ];
        return response()->json($data);
    }

    
    public function show(Client $client)
    {
        //
        $data = [
            'message' => 'Client details',
            'client' => $client,
            'service' => $client->services

        ];
        return response()->json($data);
    }

    
    public function edit(Client $client)
    {
        //
    }

    
    public function update(Request $request, Client $client)
    {
        //
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->save();
        $data = [
            'message' => 'Client updated successfully',
            'client' => $client
        ];
        return response()->json($data);
    }

    
    public function destroy(Client $client)
    {
        //
        $client->delete();
        $data = [
            'message' => 'Client deleted successfully',
            'client' => $client
        ];
        return response()->json($data);
    }

    public function attach(Request $request){
        $client = Client::find($request->client_id);
        $client->services()->attach($request->service_id);
        $data = [
            'message' => 'Client attached successfully',
            'client' => $client
        ];
        return response()->json($data);
    }

    public function detach(Request $request){
        $client = Client::find($request->client_id);
        $client->services()->detach($request->service_id);
        $data = [
            'message' => 'Client detached successfully',
            'client' => $client
        ];
        return response()->json($data);
    }
}
