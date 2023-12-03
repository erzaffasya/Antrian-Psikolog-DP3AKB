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

    // public static function getAntrianByDokter()
    // {
    // return self::select('dokter_id', 'status', DB::raw('MAX(urut) as urut'))
    //     ->whereIn('status', ['P', 'R', 'S']) // Include 'S' status
    //     ->groupBy('dokter_id', 'status')
    //     ->get()
    //     ->groupBy('dokter_id')
    //     ->map(function ($items) {
    //         // Check for 'P' status first, then 'R', and finally 'S'
    //         return $items->firstWhere('status', 'P')
    //             ?? $items->firstWhere('status', 'R')
    //             ?? $items->firstWhere('status', 'S');
    //     });
    // }

    public static function getAntrianByDokter()
    {

        $today = now();

        // Fetch all entries with 'P', 'R', and 'S' status
        $queues = self::select('dokter_id', 'status', 'urut')
            ->whereIn('status', ['P', 'R', 'S'])
            ->whereYear('created_at', $today->year)
            ->whereMonth('created_at', $today->month)
            ->whereDay('created_at', $today->day)
            ->orderBy('urut', 'asc') // Order by 'urut' in ascending order
            ->get()
            ->groupBy('dokter_id');

        // Map each doctor to their current ('P') and next ('R') queues
        return $queues->map(function ($items) {
            return [
                'current' => $items->firstWhere('status', 'P'), // Current queue
                'next' => $items->where('status', 'R')->min('urut') // Lowest 'R' queue number
            ];
        });
    }

    public static function getAntrianForDokter($dokterId)
    {
        // Fetch all entries with 'P', 'R', and 'S' status for the specific dokter_id
        $queues = self::select('id', 'dokter_id', 'status', 'urut')
            ->whereIn('status', ['P', 'R', 'S'])
            ->where('dokter_id', $dokterId)
            ->orderBy('urut', 'asc')
            ->get();

        // Map the doctor to their current ('P') and next ('R') queues
        return [
            'current' => $queues->firstWhere('status', 'P'), // Current queue
            'next' => $queues->where('status', 'R')->min('urut') // Next 'R' queue number
        ];
    }
}
