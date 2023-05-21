<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public readonly Brand $brand;

    public function __construct()
    {
        $this->brand = new Brand();
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = $this->brand->all();
        return view('brand/brands', ['brands' => $brands]);
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
    public function edit(Brand $brand)
    {
        return view('brand/brand_edit', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->brand->where('id', $id)->update($request->except(['_token', '_method']));

        if($updated){
            return redirect()->back()->with('message', 'Successfully updated');
        }
        else{
            return redirect()->back()->with('message', 'Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
