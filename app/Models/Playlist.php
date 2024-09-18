<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $table = 'playlist';
    protected $fillable = ['name','desc','category_id','teacher_id'];


    public function course()
    {
        return $this->hasMany(Course::class);
    } 

}
