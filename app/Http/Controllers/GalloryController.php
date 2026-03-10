<?php

namespace App\Http\Controllers;

use App\Models\Gallory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class GalloryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallory = Gallory::all();
        return view('Gallory.gallory', compact('gallory'));
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
        $image = $request->file('image')->store('gallery', 'public');

        Gallory::create([
            'name' => $request->name,
            'image' => $image
        ]);

        return redirect()->route('gallory.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallory $gallory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallory $gallory)
    {

        return view('Gallory.galleryEdite', compact('gallory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallory $gallory)
    {
        $data = ['name' => $request->name];

        // Only replace image if a new one was uploaded
        if ($request->hasFile('image')) {
            // Delete old image
            Storage::disk('public')->delete($gallory->image);
            // Store new image
            $data['image'] = $request->file('image')->store('gallery', 'public');
        }

        $gallory->update($data);

        return redirect()->route('gallory.store')->with('success', 'Image updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallory $gallory)
    {
        // delete image from storage

        Storage::disk('public')->delete($gallory->image);

        // delete record from database
        $gallory->delete();

        return redirect()->route('gallory.store')->with('success', 'Image deleted');
    }
}
