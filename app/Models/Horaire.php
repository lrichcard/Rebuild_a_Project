<?php

namespace App\Models;

use App\Models\Cour;
use App\Models\Jour;
use App\Models\Heure;
use App\Models\Salle;
use App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Horaire extends Model
{
    use HasFactory;
    
   public function cour(){
       
    return $this->belongsTo(Cour::class);
   }


   public function jour()
   {
       return $this->belongsTo(Jour::class);
   }

   public function salle()
   {
       return $this->belongsTo(Salle::class);
   }

   public function heure()
   {
       return $this->belongsTo(Heure::class);
   }


   public function inscription()
   {
       return $this->belongsToMany(Inscription::class);
   }
}
