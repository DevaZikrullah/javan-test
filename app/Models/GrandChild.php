<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrandChild extends Model
{
    public $table = "grandchild";
    use HasFactory;
    protected $fillable = [
        'parent_id',
        'name',
        'gender'
    ];
}
