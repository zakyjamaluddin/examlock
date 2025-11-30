<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Waktu extends Model
{
    protected $fillable = ['tanggal', 'waktu_mulai', 'waktu_selesai'];
}
