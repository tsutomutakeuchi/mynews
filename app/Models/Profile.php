<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    // 以下を追記
    protected $guarded = array('id');
    // fillableを使う方法
    /* protected $fillable = [
        'name',
        'gender',
        'hobby',
        'introduction'
    ]; */
    
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required'
    );
}
