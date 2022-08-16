<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    public $table = "child";
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'gender'
    ];

    public function grandChild(){
        return $this->hasMany(GrandChild::class);
    }
}
