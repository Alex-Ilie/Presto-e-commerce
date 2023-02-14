<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title', 'price', 'description', 'category_id', 'user_id', 'img'
    ];




    public function user()
    {
        return $this->belongsTo(User::class);
    }




    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }


    public static function toBeRevisionedCount(){
        return Product::where('is_accepted', null)->count();
    }



}
