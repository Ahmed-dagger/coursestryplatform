<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\InteractsWithTime;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Course extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $table = 'courses';
    protected $fillable = ['name','category_id','Price','desc','teacher_id','category_id'];

    public function registerMediaConversions(?\Spatie\MediaLibrary\MediaCollections\Models\Media $media = null): void
    {
        $this->addMediaConversion('thumb')
             ->width(300)
             ->height(300);
    }

    public function playlist()
    {
        return $this->hasMany(Playlist::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function relatedCourses()
    {
        return Course::where('category_id', $this->category_id)
                     ->where('id', '!=', $this->id) // Exclude the current course
                     ->get();
    }



}
