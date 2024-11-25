<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $menuItems = [
        [
            'icon' => 'images/icon1.png',
            'label' => 'Menu Label',
            'shortcut' => '⇧A',
            'description' => 'Menu description.'
        ],
        // Add more menu items as needed
    ];

    $otherMenuItems = [
        [
            'icon' => 'images/icon2.png',
            'label' => 'Another Menu Label',
            'shortcut' => '⇧B',
            'description' => 'Another description.'
        ],
        // Add more items
    ];

    return view('welcome', compact('menuItems', 'otherMenuItems'));
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
