<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sales;


class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sales::all();
        return view('sales_list', ['sales' => $sales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sales::create([
            'sales_name' => e($request->input('sales_name')),
            'sales_email' => e($request->input('sales_email')),
            'sales_phone' => e($request->input('sales_phone')),
        ]);
        return redirect()->route('sales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $sales_id
     * @return \Illuminate\Http\Response
     */
    public function edit($sales_id)
    {
        $sales = Sales::find($sales_id);
        return view('sales_edit', ['sales' => $sales]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $sales_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sales_id)
    {
        $sales = Sales::find($sales_id);
        $sales->sales_name = e($request->input('sales_name'));
        $sales->sales_email = e($request->input('sales_email'));
        $sales->sales_phone = e($request->input('sales_phone'));
        $sales->save();

        return redirect()->route('sales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $sales_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sales_id)
    {
        $sales = Sales::find($sales_id);
        $sales->delete();
        return redirect()->route('sales.index');
    }
}