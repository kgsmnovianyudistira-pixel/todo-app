<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model{
    protected $fillable = [ 'judul', 'deskripsi', 'status' ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
