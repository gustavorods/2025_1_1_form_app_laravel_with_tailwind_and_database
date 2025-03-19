<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Adicione esta linha
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'valor', 'estoque'];
}
