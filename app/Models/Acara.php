<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class acara extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'acaras';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = [
        'judul_acara',
        'deskripsi_acara',
        'poster',
        'id_user'
    ];

    public function user() {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
