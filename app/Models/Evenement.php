<?php

namespace App\Models;

use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'date', 'salle', 'nombre_max_places', 'type_id'];
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

}
