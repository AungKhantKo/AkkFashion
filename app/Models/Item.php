<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\Category;

class Item extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table ="items";
    protected $fillable = [
        'codeNo',
        'name',
        'description',
        'price',
        'image',
        'inStock',
        'discount',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
