<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
//Mass assignment To the Question Table
	protected $fillable = ['title', 'body'];

//Defining of the Table Relation
    public function users(){
    	return $this->belongTo(Question::class);
    }

 //Define the mutators 
    public function setAttributes ($value){
    	$this->attributes['title']= $value;
    	$this->attributes['slug']=str_slug('$value');
    }
}
