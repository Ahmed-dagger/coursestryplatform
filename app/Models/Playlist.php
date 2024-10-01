<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Playlist extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'playlists';
    protected $fillable = ['name','desc','category_id','teacher_id' , 'course_id'];


    public function course()
    {
        return $this->belongsTo(Course::class , 'course_id');
    } 

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

}
