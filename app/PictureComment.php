<?php

//This defines the model for the PICTURE_COMMENT table.

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //table
	protected $table = 'PICTURE_COMMENT';
	
	//primary key
	protected $primaryKey = 'comment_id'; 
	
	//dont automatically deal with timestamps
	public $timestamps = false;
	
	//what fields can be mass-assigned
	protected $fillable = [

	];
	
	
}
