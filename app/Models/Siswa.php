<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Siswa extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $table = 'siswa';

    protected $primaryKey = 'nisn';

    public $incrementing = false;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nisn',
        'nis',
        'nama',
        'password',
        'id_kelas',
        'alamat',
        'no_telp',
        'id_spp'
    ];

    protected $hidden = ['password'];
}
