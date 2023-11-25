<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


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


    public static function getAllAntrian()
    {
        return self::all();
    }

    public static function getAntrianByDokter()
    {
        return self::select('dokter_id', DB::raw('MIN(urut) as urut'), DB::raw('count(*) as total'))
        ->groupBy('dokter_id')
        ->get();
    }
}
