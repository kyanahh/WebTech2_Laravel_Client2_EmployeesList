<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Employees extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = ['firstname', 'lastname', 'email'];

    use HasFactory;
}
