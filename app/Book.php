<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   public function images()
  {
    return $this->hasMany(BookImage::class);
  }

  public function catagory()
  {
    return $this->belongsTo(Catagory::class);
  }

  public function issuedbook()
  {
    return $this->hasMany(Issuedbook::class);
  }
}
