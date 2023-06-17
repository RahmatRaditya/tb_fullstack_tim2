<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\User;
use App\Barang;
use App\Outlet;
use Illuminate\Support\Facades\DB;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::join('users', 'transaksi.id', 'users.id')
            ->join('barangs', 'transaksi.barang_id', 'barangs.barang_id')
            ->join('outlets', 'transaksi.outlet_id', 'outlets.outlet_id')
            ->select('transaksi.transaksi_id', 'transaksi.transaksi_nomor', 'users.name', 'barangs.barang_name', 'outlets.outlet_name', 'barangs.barang_qty', 'transaksi.transaksi_display', 'transaksi.transaksi_visit')
            ->orderBy('transaksi_id', 'asc')
            ->get();
        $transaksiTotal = DB::table('transaksi')->count();
        $salesTotal = DB::table('sales')->count();
        $barangTotal = DB::table('barangs')->count();
        $outletTotal = DB::table('outlets')->count();
        return view('transaksi_list', compact('transaksi', 'transaksiTotal', 'salesTotal', 'barangTotal', 'outletTotal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('transaksi_form');
        $users = User::all();
        $barangs = Barang::all();
        $outlets = Outlet::all();
        return view('transaksi_form', compact('users', 'barangs', 'outlets'));

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
            'transaksi_nomor' => e($request->input('transaksi_nomor')),
            'id' => e($request->input('id')),
            'barang_id' => e($request->input('barang_id')),
            'outlet_id' => e($request->input('outlet_id')),
            'transaksi_display' => e($request->input('transaksi_display')),
            'transaksi_visit' => e($request->input('transaksi_visit')),
        ]);
        return redirect()->route('transaksi.index');
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
        $users = User::all();
        $barangs = Barang::all();
        $outlets = Outlet::all();
        return view('transaksi_edit', compact('transaksi', 'users', 'barangs', 'outlets'));
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
        $transaksi->transaksi_nomor = e($request->input('transaksi_nomor'));
        $transaksi->id = e($request->input('id'));
        $transaksi->barang_id = e($request->input('barang_id'));
        $transaksi->outlet_id = e($request->input('outlet_id'));
        $transaksi->transaksi_display = e($request->input('transaksi_display'));
        $transaksi->transaksi_visit = e($request->input('transaksi_visit'));
        $transaksi->save();

        return redirect()->route('transaksi.index');
    }

}