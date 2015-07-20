<?php

namespace Forum;

use Illuminate\Database\Eloquent\Model;

class Solved extends Model
{
    //
    protected $table = 'solveds';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['is_solved', 'topic_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['topic_id'];
}
