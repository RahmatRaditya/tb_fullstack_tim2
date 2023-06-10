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
        'transaksi_nomor',
        'id',
        'barang_id',
        'outlet_id',
        'transaksi_display',
        'transaksi_visit',
    ];

    protected $primaryKey = 'transaksi_id';

}