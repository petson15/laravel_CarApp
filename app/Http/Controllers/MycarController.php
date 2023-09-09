<?php

namespace App\Http\Controllers;

use App\Models\Mycar;
use Illuminate\Http\Request;

class MycarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $username = $request->session()->get('username');
        $id = $request->session()->get('id');
        $data = ['username' => $username, 'id' => $id];

        return view('user.mycars', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'carImage' => 'required|image|mimes:jpeg,png,jpg,gif', 
        ]);
        $imagePath = $request->file('carImage')->store('public/images');
        $image = new Mycar(); 
        $image->description = request('description');
        $image->owner = request('owner');
        $image->rate_per_day = request('rate');
        $image->image = $imagePath;
        $image->save();
        $id = $request->session()->get('id');

        return redirect('user/mycars/' . $id)->with('success_mg', 'car uploaded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
