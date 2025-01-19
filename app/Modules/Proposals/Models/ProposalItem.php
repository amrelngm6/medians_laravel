<?php

namespace App\Modules\Proposals\Models;

use Illuminate\Database\Eloquent\Model;

class ProposalItem extends Model
{
    
    protected $table = 'proposal_items';

    protected $fillable = ['business_id', 'proposal_id','item_name','item_id','item_type', 'description',  'quantity', 'unit_price', 'subtotal', 'tax', 'total'];


}
