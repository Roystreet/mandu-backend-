<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'upper_division_id',
        'name',
        'level',
        'collaborator',
        'embassador',
    ];
    // service->sudivision()
    // service->upperdivision()
    public function subDivision()
    {
        return $this->hasMany(Division::class, 'upper_division_id');
    }
    
    public function upperDivision(){
        return $this->belongsTo(Division::class, 'upper_division_id');
    }

}
