<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class DeviceController extends Controller
{

/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
    public function index()
    {
        Log::alert('dsfsd');
        Log::alert(Device::all());
//        $devices = Device::all();
        $devices = DB::table('devices')->select('name','price')->get();
        dd($devices);
        return view('index', compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request): Response
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
        ]);
        $show = Device::create($validatedData);

        return redirect('/devices')->with('success', 'Device is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $device = Device::findOrFail($id);

        return view('edit', compact('device'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required'
        ]);
        Game::whereId($id)->update($validatedData);

        return redirect('/devices')->with('success', 'Device Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $game = Device::findOrFail($id);
        $game->delete();

        return redirect('/devices')->with('success', 'Device Data is successfully deleted');
    }
}
