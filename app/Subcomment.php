<?php

namespace Forum;

use Illuminate\Database\Eloquent\Model;

class Subcomment extends Model
{
    //
    protected $table = 'subcomments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['comment_id', 'author', 'reply'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function Comment(){
      return $this->belognsTo('Forum/Comment');
    }
}
