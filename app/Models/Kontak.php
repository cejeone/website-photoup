<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kontak extends Model
{

    use HasFactory, SoftDeletes;

    protected $table = 'kontak';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = [

        'humas1',
        'telepon1',
        'konfirmasi_telepon1',
        'humas2',
        'telepon2',
        'konfirmasi_telepon2',
        'id_user'
    ];

    public function user() {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
