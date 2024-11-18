<?php

namespace App\Modules\Milestones\Models;

use Illuminate\Database\Eloquent\Model;


class Milestone extends Model
{
    
    protected $table = 'milestones';

    protected $primaryKey = 'milestone_id';

    protected $fillable = ['business_id', 'name', 'description', 'start_date', 'end_date', 'model_id', 'model_type', 'client_access', 'sort', 'created_by'];

    /**
     * Load related category as Morph
     */
    public function model()
    {
        return $this->belongsTo();
    }


}
