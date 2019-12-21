<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookIssued extends Model
{
    public function user()
      {
        return $this->belongsTo(User::class);
      }

    public function book()
      {
        return $this->belongsTo(Book::class);
      }
}
