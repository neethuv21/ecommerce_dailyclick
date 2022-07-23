<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    //  public function selectdate($table,$id){
    // return DB::table('payments')->select(DB::raw('*'))
    //               ->whereRaw('Date(created_at) = CURDATE()')->get();
       
    // }

    public function vieworder($table){
        return DB::table($table)->get();
    }
}
