<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diplomes extends Model
{
    use HasFactory;
    
    protected $guarded=[];
    public $table = "diplomes";
    public $primaryKey = "id";
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
    public const PRIMARY_KEY = 'id';
}
