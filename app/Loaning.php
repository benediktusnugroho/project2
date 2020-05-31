<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaning extends Model
{
    protected $table = 'loanings';
    protected $fillable = ['nama', 'username', 'nim', 'judul_buku', 'nama_penerbit'];
}
