<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statut extends Model
{
    use HasFactory;

    protected $table = 'statut';

    public $timestamps = false;

    protected $softDelete = false;
}