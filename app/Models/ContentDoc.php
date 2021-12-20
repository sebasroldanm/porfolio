<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ContentDoc
 * @package App\Models
 * @version December 20, 2021, 2:41 am UTC
 *
 * @property string $description
 * @property string $code
 * @property string $language
 * @property integer $documentation_id
 */
class ContentDoc extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'content_docs';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'description',
        'code',
        'language',
        'documentation_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'description' => 'string',
        'code' => 'string',
        'language' => 'string',
        'documentation_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'description' => 'required',
        'language' => 'required',
        'documentation_id' => 'required'
    ];

    /**
     * Get the documentation associated with the ContentDoc
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function documentation()
    {
        return $this->hasOne(Documentation::class, 'id', 'documentation_id');
    }
}
