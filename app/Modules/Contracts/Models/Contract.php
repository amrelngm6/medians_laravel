<?php

namespace App\Modules\Contracts\Models;

use Illuminate\Database\Eloquent\Model;


class Contract extends Model
{
    
    protected $table = 'contracts';

    protected $primaryKey = 'contract_id';

    protected $fillable = ['business_id', 'subject', 'description', 'content', 'client_id', 'start_date', 'end_date', 'model_id', 'model_type', 'created_by'];

    /**
     * Load related category as Morph
     */
    public function model()
    {
        return $this->belongsTo();
    }


}
