<?php

namespace App\Http\Controllers;

use App\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outlets = Outlet::all();
        return view('outlet_list', ['outlets' => $outlets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('outlet_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Outlet::create([
            'outlet_name' => e($request->input('outlet_name')),
            'outlet_address' => e($request->input('outlet_address')),
        ]);
        return redirect()->route('outlets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $outlet_id
     * @return \Illuminate\Http\Response
     */
    public function edit($outlet_id)
    {
        $outlets = Outlet::find($outlet_id);
        return view('outlet_edit', ['outlet' => $outlets]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $outlet_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $outlet_id)
    {
        $outlets = Outlet::find($outlet_id);
        $outlets->outlet_name = e($request->input('outlet_name'));
        $outlets->outlet_address = e($request->input('outlet_address'));
        $outlets->save();

        return redirect()->route('outlets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $outlet_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($outlet_id)
    {
        $outlets = Outlet::find($outlet_id);
        $outlets->delete();
        return redirect()->route('outlets.index');
    }
}