<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
//Mass assignment To the Question Table
	protected $fillable = ['title', 'body'];

//Defining of the Table Relation
    public function user(){
    	return $this->belongsTo(User::class);
    }

 //Define the mutators 
    public function setTitleAttribute($value){
    	$this->attributes['title']= $value;
    	$this->attributes['slug']=str_slug($value);
    }
    public function getUrlAttribute(){
    	return route("questions.show", $this->id);
    }
    public function getCreatedDateAttribute(){

        return $this->created_at->diffForHumans();

    }


    public function getStatusAttribute(){

        if($this->answers>0){
            if($this->best_answer_id){
                return "answered-accepted";
            }
            return "answered";
        }
        return "unanswered";
    }
}
