<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;

    const UPDATED_AT = null;
    protected $guarded = array('id', 'created_at');
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public static $rules = array(
        'subject' => 'required | max:100',
        'text' => 'required | max:400',
    );
}
