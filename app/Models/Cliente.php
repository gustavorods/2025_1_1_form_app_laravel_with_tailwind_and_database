<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Adicione esta linha
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{   
    use HasFactory;
    protected $fillable = ['name', 'telephone', 'date_of_contact', "origin", "observation"];
}
