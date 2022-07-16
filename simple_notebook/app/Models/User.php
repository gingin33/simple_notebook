<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public $timestamps = false;

    public function note(){
        return $this->hasMany('App\Models\Notebook');
    }
    public static $rules = array(
        'mail' => 'email',
        'password' => 'min:8',
    );
}
