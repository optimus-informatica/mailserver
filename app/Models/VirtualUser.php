<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualUser extends Model
{
    use HasFactory;
    protected $fillable = ['virtual_domain_id', 'email', 'password', 'home'];
}
