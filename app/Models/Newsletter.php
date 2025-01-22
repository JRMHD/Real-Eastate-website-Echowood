<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    // Specify the table name (if different from the default pluralized form)
    protected $table = 'newsletters';

    // Specify the fillable fields for mass assignment
    protected $fillable = ['email'];
}
