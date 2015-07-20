<?php

namespace Forum;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['author', 'content', 'is_private', 'is_banned', 'topic_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['topic_id'];

    public function subcomments(){
      return $this->hasMany('Forum/Subcomments');
    }
}
