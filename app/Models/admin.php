<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    public function insertData($table,$data){
        DB::table($table)->insert($data);

    }
    public function adminview($table){
        return DB::table($table)->get();
    }
    public function aboutedit($table,$id){
        return DB::table($table)->where('id',$id)->get();
    }
    public function editaboutdata($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }
    public function deleteabout($table,$id){
        return DB::table($table)->where('id',$id)->delete();
    }
    public function aboutview($table){
        return DB::table($table)->get();
    }
    public function adminviewvendor($table){
        return DB::table($table)->get();
    }
    public function vendoraprv($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }
    public function vendordclne($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }
     public function adminviewusers($table){
        return DB::table($table)->get();
    }
    // public function useraprv($table,$id,$data){
    //     return DB::table($table)->where('id',$id)->update($data);
    // }
    // public function userdclne($table,$id,$data){
    //     return DB::table($table)->where('id',$id)->update($data);
    // }
    public function adminviewcontact($table){
        return DB::table($table)->get();
    }
    public function adminviewproduct($table){
        return DB::table($table)->get();
    }
    public function productaprv($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }
    public function productdclne($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }
    public function adminviewfeedback($table){
        return DB::table($table)->get();
    }

    public function profileupdate($table,$id){
        return DB::table($table)->where('id',$id)->get();
    }
    public function aupdateprofile($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }
    
}
