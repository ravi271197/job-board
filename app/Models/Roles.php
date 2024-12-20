<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    
    public static function userRole() 
    {
        return 2;
    }
    
    public static function adminRole() 
    {
        return 1;
    }
}
