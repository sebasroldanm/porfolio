<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Documentation
 * @package App\Models
 * @version December 19, 2021, 10:49 pm UTC
 *
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property integer $typeDoc_id
 */
class Documentation extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'documentations';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'slug',
        'slug_url',
        'description',
        'typeDoc_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'slug_url' => 'string',
        'description' => 'string',
        'typeDoc_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'slug' => 'required',
        'slug_url' => 'required',
        'typeDoc_id' => 'required'
    ];

    /**
     * Get all of the contentsDoc for the Documentation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentsDoc()
    {
        return $this->hasMany(ContentDoc::class, 'documentation_id', 'id');
    }

    /**
     * Get the typeDoc associated with the Documentation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function typeDoc()
    {
        return $this->hasOne(DocType::class, 'id', 'typeDoc_id');
    }
}
