<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model //nama modelnya posts
{
    //Table Name
    protected $table = 'posts'; //panggil nama tabel
    //primarykey
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true; 
}
