<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    
     public function publisher()
     {
         return $this->belongsTo(Publisher::class, 'Publisher_id');
     }

     public function categories()
     {
        return $this->belongsToMany(Categories::class, 'book_category','book_id', 'category_id' );
     }
   
}
