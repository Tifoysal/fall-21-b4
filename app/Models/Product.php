<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];

    // relation
    
    public function category(){
        
    //who->relation name->to whom
        // 1 to  1 dependent =belongsTo
        // 1 to 1 not dependent = hasOne
        return $this->belongsTo(Category::class);
    }
}
