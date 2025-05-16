<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nim',
        'program_studi',
        'fakultas',
        'universitas',
        'nomor_telepon',
        'tentang_saya',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat_domisili',
        'kota',
        'provinsi',
        'provinsi_id', // Ditambahkan
        'kota_id',     // Ditambahkan
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'tanggal_lahir' => 'date', // Pastikan ini ada jika Anda menyimpan tanggal lahir sebagai date
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'provinsi_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'kota_id');
    }
}