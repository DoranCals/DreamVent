<?php

//This defines the model for the PICTURE table.

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //table
	protected $table = 'PICTURE';

  // Change primary key from 'id' to 'picture_id'
  protected $primaryKey = 'picture_id';
	
	//dont automatically deal with timestamps
	public $timestamps = false;
	
	//what fields can be mass-assigned
	protected $fillable = [
		'picture_id',
		'picture_link',
		'author_id',
		'description'
	];
	
	
}
