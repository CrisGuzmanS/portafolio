<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";

    protected $fillable = [
        "name",
        "description",
        "path_cover_page",
        "link",
        "date"
    ];

    public function features()
    {
        return $this->belongsToMany('App\Feature');
    }
}
