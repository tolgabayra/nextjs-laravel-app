<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model{

 protected $fillable=[
     "newstitle",
     "newsdesc",
     "newscategory",
     "newsrate"
 ];

 protected $hidden = [];
}