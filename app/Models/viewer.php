<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viewer extends Model
{
    use HasFactory;
    public function contactinsertdata($table,$data){
        DB::table($table)->insert($data);

    }
    public function userviewprduct($table){
        return DB::table($table)->get();
    }
     public function slctprduct($table){
        return DB::table($table)->get();
    }
}
