<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audios extends Model
{
    use HasFactory;
    protected $table = 'audios';
    protected $fillable = ['title', 'file_name', 'file_path', 'contentID'];
    public $timestamps = true;
}
