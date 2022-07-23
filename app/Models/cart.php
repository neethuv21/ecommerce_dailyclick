<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    // public function cartdetails($table,$data){
    //     DB::table($table)->insert($data);

    // }
    // public function viewcartproduct($table){
    //     return DB::table($table)->get();
    // }
    public function selectsum($table,$id)
    {
        return DB::table($table)->select(DB::raw("SUM($id) as csum "))->where('uid',$id)->get();
    }
    public function removecart($table,$id){
        return DB::table($table)->where('id',$id)->delete();
    }
    public function cartcount($table,$id)
    {
        return DB::table($table)->select(DB::raw("COUNT(total) as cart"))->where('uid',$id)->get();
    }
}
