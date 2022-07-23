<?php

namespace App\Models;

use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public function addcategory($table,$data){
        DB::table($table)->insert($data);

    }
     public function categoryview($table){
        return DB::table($table)->get();
    }
     public function categoryedit($table,$id){
        return DB::table($table)->where('id',$id)->get();
    }
    public function editcategorydata($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }
    public function dltecategory($table,$id){
        return DB::table($table)->where('id',$id)->delete();
    }
    
}
