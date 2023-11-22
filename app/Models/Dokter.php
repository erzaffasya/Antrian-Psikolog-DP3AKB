<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokter';
    protected $guarded = [];

    protected $primaryKey = 'id';

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function spesialis()
    {
        return $this->belongsTo(Spesialis::class, 'spesialis_id', 'id');
    }
}
