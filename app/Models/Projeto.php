<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $table ='projetos';

    public $timestamps = true;
    
    protected $fillable = ['nome','endereco','telefone','moeda','created_at'];
}
