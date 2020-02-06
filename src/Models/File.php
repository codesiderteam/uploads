<?php

namespace Codesider\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    protected $table = "files";

    protected $fillable = [
        "title", "path", "alt", "size","type","extension", "fileable_id", "fileable_type"
    ];


    // Relations

    /**
     * Get the owning fileaable model.
     */
    public function fileaable()
    {
        return $this->morphTo();
    }
}
