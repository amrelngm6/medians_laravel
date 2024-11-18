<?php

namespace App\Modules\Languages\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelFile;

class Language extends Model
{
    
    protected $table = 'languages';

    protected $fillable = ['name', 'icon', 'language_code', 'created_by', 'status'];


}
