<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Eloquent
{
  use HasFactory;

  public function album()
  {
    return $this->belongsTo(Album::class, 'album_id', 'id');
  }
}
