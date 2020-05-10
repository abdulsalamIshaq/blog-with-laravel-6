<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Nicolaslopezj\Searchable\SearchableTrait;

class Post extends Model
{
    //
    use Notifiable;
    use SearchableTrait;
    /**
     * searchable rules.
     * @var array
     */

    /**protected $searchable = [
        'columns' => [
            'posts.title' => 2,
            'users.name' => 2,
            'categories.name' => 2,
        ],
        'join' => [
            'users' => ['users.id', 'posts.author_id'],
            'categories' => ['category.id', 'posts.categories_id'],
            ]
    ];*/
    
    protected $fillable = ['title', 'content', 'category_id', 'author_id', 'tags'];

    public function category() {
        return $this->belongsTo('App\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    } 
    public function comment()
    {
        return $this->hasMany('App\comment');
    }
}
