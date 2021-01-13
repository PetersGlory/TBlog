<?php

namespace TechObserversBlog;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
     protected $fillable = [
   	'user_id', 'title', 'content', 'link', 'post_on'
   ];
   
   public function getShortContentAttribute(){
   	return substr($this->content, 0, random_int(150, 250));
   }
   public function setPostOnAttribute($value){
   	$this->attributes['post_on'] = Carbon::parse($value);
   }
}
