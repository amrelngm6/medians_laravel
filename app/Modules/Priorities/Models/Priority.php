<?php

namespace App\Modules\Priorities\Models;

use Illuminate\Database\Eloquent\Model;


class Priority extends Model
{
    
    protected $table = 'priorities';

    protected $primaryKey = 'priority_id';

    protected $fillable = ['business_id', 'name', 'model', 'color', 'sort', 'created_by'];

    /**
     * Load related category as Morph
     */
    public function model()
    {
        return $this->belongsTo();
    }


}
