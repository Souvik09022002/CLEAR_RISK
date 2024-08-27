<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminTable extends Model
{
    use HasFactory;

    protected $table = 'admin_table';

    // Allow mass assignment if needed
    protected $fillable = ['username', 'Email', 'password'];
}
