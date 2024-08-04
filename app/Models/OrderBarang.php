<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBarang extends Model
{
    use HasFactory;

    protected $table = 'order_barang';

    protected $primaryKey = 'no_po';

    public $timestamps = true;

    protected $fillable = [
        'tanggal',
        'kode_supplier',
        'PPN',
    ];
}
