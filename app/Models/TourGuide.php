<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourGuide extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama',
        'spesialisasi',
        'pengalaman',
        'bahasa',
        'kontak',
        'foto',
        'sertifikat',
        'status',
    ];
    public function user() { return $this->belongsTo(User::class); }
}
