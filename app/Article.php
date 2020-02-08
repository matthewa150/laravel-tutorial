<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /*
    // Overrides a super function
    public function getRouteKeyName()
    {
        return 'slug'; // Article::where('slug', $article)->first();
    }
    */

    // Excplicitly allow MassAssignment
    protected $fillable = ['title', 'excerpt', 'body'];

    /*
        User::create(request()->all()) // Can be super dangerous!

        If you are being safe, you can disable this protection:

        protected $guarded = [];
    */
}
