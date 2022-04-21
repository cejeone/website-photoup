<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'testimonial';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = [
    'nama_anggota',
    'kata_kata',
    'foto_anggota',
    'status_anggota',
    'id_user'
    ];

    public function user() {
        return $this->hasMany(User::class, 'id', 'id_user');
    }

}
