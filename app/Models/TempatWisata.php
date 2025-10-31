<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempatWisata extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_tempat',
        'kategori',
        'deskripsi',
        'alamat',
        'latitude',
        'longitude',
        'tiket_masuk',
        'kontak',
        'jam_buka',
        'status',
    ];

    public function user() { return $this->belongsTo(User::class); }
    public function photos() { return $this->hasMany(Photo::class); }
    public function reviews() { return $this->hasMany(Review::class); }
    public function favorites() { return $this->hasMany(Favorite::class); }
}
