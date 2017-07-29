<?php

namespace App\Http\Controllers;

use App\Drone;

use Illuminate\Http\Request;

class DroneController extends Controller
{
    public function index()
    {
        return Drone::latest()->get();
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:500'
        ]);
        return Drone::create([ 'body' => request('body') ]);
    }
    
    public function destroy($id)
    {
        $drone = Drone::findOrFail($id);
        $drone->delete();
        return 204;
    }
}