<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','description','cover_image','owner','type_id'];


    public function technologies(){

        return $this->belongsToMany(Technology::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
