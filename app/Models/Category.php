<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use HasFactory , Translatable,SoftDeletes;

    protected $table = 'categories';
    // 2. To add translation methods
    protected $fillable =['parent'];
    // 3. To define which attributes needs to be translated
    public $translatedAttributes = ['name','description'];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function details()
    {
        return $this->hasMany(CategoryTranslation::class);
    }

    

}
