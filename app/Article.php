<?php

namespace TechObserversBlog;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Article extends Model
{
   protected $fillable = [
   	'user_id', 'title', 'content', 'live', 'post_on','category'
   ];

   public function setLiveAttribute($value){
   	$this->attributes['live'] = (boolean)($value);
   }
   public function getShortContentAttribute(){
   	return substr($this->content, 0, random_int(150, 250));
   }
   public function setPostOnAttribute($value){
   	$this->attributes['post_on'] = Carbon::parse($value);
   }
}
