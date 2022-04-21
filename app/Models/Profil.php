<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profil extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'profils';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = [
        'nama_ketum',
        'periode_ketum',
        'sambutan',
        'foto_ketum',
        'foto_struktural',

    ];

}
