<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $transaksi = Transaksi::all();
        // $transaksi = new Transaksi;
        // $transaksi->tabelTransaksi();
        // $transaksi = Transaksi::tabelTransaksi()->get();
        $transaksi = Transaksi::join('sales', 'transaksi.sales_id', '=', 'sales.sales_id')
            ->join('barangs', 'transaksi.barang_id', '=', 'barangs.barang_id')
            ->join('outlets', 'transaksi.outlet_id', '=', 'outlets.outlet_id')
            ->select('transaksi.transaksi_id', 'sales.sales_name', 'barangs.barang_name', 'outlets.outlet_name', 'barangs.barang_qty', 'transaksi.transaksi_display', 'transaksi.transaksi_visit')
            ->get();
        return view('transaksi_list', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'sales_id' => e($request->input('sales_id')),
            'barang_id' => e($request->input('barang_id')),
            'outlet_id' => e($request->input('outlet_id')),
            'transaksi_display' => e($request->input('transaksi_display')),
            'transaksi_visit' => e($request->input('transaksi_visit')),
        ]);
        return redirect()->route('outlets.index');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $transaksi_id
     * @return \Illuminate\Http\Response
     */
    public function edit($transaksi_id)
    {
        $transaksi = Transaksi::find($transaksi_id);
        return view('transaksi_edit', ['transaksi' => $transaksi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $transaksi_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $transaksi_id)
    {
        $transaksi = Transaksi::find($transaksi_id);
        $transaksi->sales_id = e($request->input('sales_id'));
        $transaksi->barang_id = e($request->input('barang_id'));
        $transaksi->outlet_id = e($request->input('outlet_id'));
        $transaksi->transaksi_display = e($request->input('transaksi_display'));
        $transaksi->transaksi_visit = e($request->input('transaksi_visit'));
        $transaksi->outlet_address = e($request->input('outlet_address'));
        $transaksi->save();

        return redirect()->route('outlets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $transaksi_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($transaksi_id)
    {
        $transaksi = Transaksi::find($transaksi_id);
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }
}