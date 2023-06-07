<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Transaksi extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "transaksi";

    protected $fillable = [
        'sales_id',
        'barang_id',
        'outlet_id',
        'transaksi_display',
        'transaksi_visit',
    ];

    protected $primaryKey = 'transaksi_id';

    public function tabelTransaksi()
    {
        return $this
            ->join('sales', 'transaksi.sales_id', '=', 'sales.sales_id')
            ->join('barangs', 'transaksi.barang_id', '=', 'barangs.barang_id')
            ->join('outlets', 'transaksi.outlet_id', '=', 'outlets.outlet_id')
            ->select('transaksi.transaksi_id', 'barangs.barang_name', 'sales.sales_name', 'outlets.outlet_name', 'barangs.barang_qty', 'transaksi.transaksi_display', 'transaksi.transaksi_visit');
    }
}