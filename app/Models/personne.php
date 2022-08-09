<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personne extends Model
{
    use HasFactory;

    protected $guarded=[];
    public $table = "personne";
    public $primaryKey = "id";
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    public const PRIMARY_KEY = 'id';
}
