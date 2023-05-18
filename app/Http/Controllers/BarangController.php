<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Helpers\Helper;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('barang_list', ['barangs' => $barangs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Barang::create([
            'barang_name' => e($request->input('barang_name')),
            'barang_qty' => e($request->input('barang_qty')),
        ]);
        return redirect()->route('barangs.index');
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
     * @param  int  $barang_id
     * @return \Illuminate\Http\Response
     */
    public function edit($barang_id)
    {
        $barangs = Barang::find($barang_id);
        return view('barang_edit', ['barang' => $barangs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $barang_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $barang_id)
    {
        $barangs = Barang::find($barang_id);
        $barangs->barang_name = e($request->input('barang_name'));
        $barangs->barang_qty = e($request->input('barang_qty'));
        $barangs->save();

        return redirect()->route('barangs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $barang_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($barang_id)
    {
        $barangs = Barang::find($barang_id);
        $barangs->delete();
        return redirect()->route('barangs.index');
    }


    //
    //
    //Function for RestAPI
    //

    public function getBarang()
    {
        $barangs = Barang::orderBy("barang_id", "desc")->get();
        return Helper::toJson($barangs);
    }

    public function createBarang(Request $request)
    {

        $barangs = new Barang();
        $barangs->barang_name = $request->barang_name;
        $barangs->barang_qty = $request->barang_qty;
        $barangs->save();

        return Helper::toJson($barangs, "Data barang sudah ditambah");

    }

    public function updateBarang(Request $request)
    {

        $barangs = Barang::where("barang_id", $request->barang_id)->first();
        $barangs->barang_name = $request->barang_name;
        $barangs->barang_qty = $request->barang_qty;
        $barangs->save();

        return Helper::toJson($barangs, "Data barang sudah diubah");

    }

    public function deleteBarang($barang_id)
    {

        $barangs = Barang::where('barang_id', $barang_id)->first();
        Barang::where('barang_id', $barang_id)->delete();

        return Helper::toJson("", "Data barang sudah dihapus");

    }
}