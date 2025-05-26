<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class invoices_items extends Model
{
    protected $table = 'invoices_items';
    protected $fillable = ['id_invoice', 'nama_barang', 'jumlah', 'harga_satuan', 'total_harga'];

    public function invoices()
    {
        return $this->belongsTo(invoices::class, 'id_invoice');
    }
}
