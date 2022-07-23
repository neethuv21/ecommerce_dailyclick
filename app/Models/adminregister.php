<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminregister extends Model
{
    use HasFactory;
    public function adminlogindata($table,$email,$password){
        return DB::table($table)->where('email',$email)->where('password',$password)->first();
    }
}
