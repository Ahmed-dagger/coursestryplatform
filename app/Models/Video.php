<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {
            return $q->where('name', 'like', "%$search%");
        });

    }// end of scopeWhenSearch


    public function playlist()
    {
        return $this->belongsTo(Playlist::class,'playlist_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class,'course_id');
    }

    public function getCourseName()
    {
        return $this->course ? $this->course->name : 'No course assigned';
    }
}
