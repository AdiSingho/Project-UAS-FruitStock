<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;

    /**
     * Tentukan nama tabel secara eksplisit (opsional, tapi disarankan 
     * jika nama tabel di database tidak menggunakan bahasa Inggris plural).
     */
    protected $table = 'gudangs';

    /**
     * Tentukan kolom mana saja yang dilindungi dari mass-assignment (tidak bisa diisi sembarangan).
     * Dengan mengisi ['id'], berarti semua kolom selain 'id' boleh diisi.
     */
    protected $guarded = ['id'];
}