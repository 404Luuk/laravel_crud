<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bier extends Model
{
   use HasFactory;

   protected $fillable = [
      'naam',
      'soort',
      'alcoholpercentage',
   ];

   protected $table = 'bier';
   protected $primaryKey = 'biernummer';
   public $timestamps = false;
}
