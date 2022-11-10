<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Eloquent
{
  use HasFactory;

  public function track()
  {
    return $this->hasMany(Track::class, 'album_id', 'id');
  }
}
