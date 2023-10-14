<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatTindakan extends Model
{
    use HasFactory;
    protected $table = 'riwayat_tindakan';
    protected $guarded = [];

    protected $primaryKey = 'id';
}
