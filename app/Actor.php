<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Actor extends Model
{
    public $guarded = [];

  public function getFullName(){
  return $this->first_name . " " . $this->last_name;
    }

  
}
