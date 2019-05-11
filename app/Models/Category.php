<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = "category";
  //  protected $fillable = ['name','slug']; //Add column permission
    protected $guarded = []; //this all columns are addable
}