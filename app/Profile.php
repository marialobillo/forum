<?php

namespace Forum;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['facebook', 'twitter', 'linkedin', 'github', 'bio', 'avatar', 'skills', 'jobs', 'level', 'is_admin', 'is_certified', 'user_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function user(){
      return $this->belognsTo('Forum/User');
    }
}
