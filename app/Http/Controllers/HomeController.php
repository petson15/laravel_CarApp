<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mycar;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Home(Request $request)
    {
        //fetch all car images from db
        $carPosts = Mycar::latest()->get();
        $username = $request->session()->get('username');
        $id = $request->session()->get('id');
        $data = ['username' => $username, 'id' => $id];

        return view('user.home', ['carPosts' => $carPosts], $data);
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
