<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    use HasFactory;
    public function vendorinsertdata($table,$data){
        DB::table($table)->insert($data);

    }
    public function vendorlogindata($table,$email,$password){
        return DB::table($table)->where('email',$email)->where('password',$password)->first();
    }
     public function editviewvendor($table){
        return DB::table($table)->get();
    }
    public function profileedit($table,$id){
        return DB::table($table)->where('id',$id)->get();
    }
    public function updateprofile($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }

     public function vproduct($table){
        return DB::table($table)->get();
    }
    public function vendorviewprduct($table){
        return DB::table($table)->get();
    }
    public function editprdct($table,$id){
        return DB::table($table)->where('id',$id)->get();
    }
    public function editprdctactn($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }
    public function deleteprdct($table,$id){
        return DB::table($table)->where('id',$id)->delete();
    }
    
}
