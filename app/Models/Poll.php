<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $table ='polls';

    protected $fillable = ['title'];

    protected $hidden = [
      'questions',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',

    ];

    public function questions(){
        return $this->hasMany('App\Question');
    }
}
