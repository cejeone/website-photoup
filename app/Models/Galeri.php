<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galeri extends Model
{
    use HasFactory, Searchable, SoftDeletes;

    protected $table = 'galeris';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function toSearchableArray()
    {
        return ['filter' => $this->filter];
    }

    protected $fillable = [

    'nama',
    'judul',
    'tag',
    'foto',
    'id_user'
    ];

    public function user() {
        return $this->hasMany(User::class, 'id', 'id_user');
    }

}
