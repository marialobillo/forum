<?php

namespace Forum;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Topic extends Model implements SluggableInterface
{
    //
    use SluggableTrait;
    protected $table = 'topics';

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'version', 'tags'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function comments(){
      return $this->hasMany('Forum/Comment');
    }

    public function category(){
      return $this->hasOne('Forum/Category');
    }

    public function solved(){
      return $this->hasOne('Forum/Solved');
    }
}
