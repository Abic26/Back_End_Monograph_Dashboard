<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewUsers extends Model
{
    use HasFactory;
    protected $table = 'new_users';
    protected $primaryKey = 'id';
    protected $fillable = ["name", "email", "phone"];

}
