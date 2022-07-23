<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendorproduct extends Model
{
    use HasFactory;
    public function productactn($table,$data){
        DB::table($table)->insert($data);

    }
}
