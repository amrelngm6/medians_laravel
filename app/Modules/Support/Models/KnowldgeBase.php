<?php

namespace App\Modules\Support\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelCategory;
use App\Modules\Core\Models\ModelField;
use App\Modules\Core\Models\ModelFile;

class KnowldgeBase extends Model
{
    
    protected $table = 'knowldge_base';

    protected $fillable = ['business_id', 'subject', 'description', 'category_id', 'sort', 'status', 'created_by'];
    
    
    /**
     * Load related Files as Morph
     */
    public function category()
    {
        return $this->morphMany(ModelCategory::class, 'model');
    }
   

    /**
     * Load related fields as Morph
     */
    public function fields()
    {
        return $this->morphMany(ModelField::class, 'model');
    }
    
    
    /**
     * Load related Files as Morph
     */
    public function files()
    {
        return $this->morphMany(ModelFile::class, 'model');
    }

}
