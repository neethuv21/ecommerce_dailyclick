<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    public function customerinsertdata($table,$data){
        DB::table($table)->insert($data);

    }
    public function customerlogindata($table,$email,$password){
        return DB::table($table)->where('email',$email)->where('password',$password)->first();
    }
    public function userviewprduct($table){
        return DB::table($table)->get();
    }
    public function edituser($table,$id){
        return DB::table($table)->where('id',$id)->get();
    }
    public function updateedituser($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }
    public function customerviewprduct($table){
        return DB::table($table)->get();
    }
    // public function addname($table,$id){
    //    return  DB::table($table)->where('id',$id)->pluck('username')->first();

    // }
   
}
