<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DocType
 * @package App\Models
 * @version December 19, 2021, 10:40 pm UTC
 *
 * @property string $type
 * @property string $tag
 */
class DocType extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'doc_types';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type',
        'tag'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'type' => 'string',
        'tag' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type' => 'required'
    ];

    /**
     * Get all of the documentations for the DocType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentations()
    {
        return $this->hasMany(Documentation::class, 'typeDoc_id', 'id');
    }
}
