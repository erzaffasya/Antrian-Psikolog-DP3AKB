<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;
    protected $table = 'antrian';
    protected $guarded = [];

    protected $primaryKey = 'id';

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    public function dokter()
    {
        return $this->belongsTo(User::class, 'dokter_id', 'id');
    }
}
