<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model{

    protected $table = 'menu';

    public $timestamps = true;

    protected $guarded = ['id'];
    
}