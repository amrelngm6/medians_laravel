<?php

namespace App\Modules\OTP\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelCategory;
use App\Modules\Core\Models\ModelField;
use App\Modules\Core\Models\ModelFile;
use App\Modules\Core\Models\ModelMember;

class OTP extends Model
{
    
    protected $table = 'otp';

    protected $fillable = ['user_id', 'user_type', 'expires_at', 'code'];

    /**
     * Load related Tasks as Morph
     */
    public function user()
    {
        return $this->morphTo();
    }

}
