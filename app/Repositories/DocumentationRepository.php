<?php

namespace App\Repositories;

use App\Models\Documentation;
use App\Repositories\BaseRepository;

/**
 * Class DocumentationRepository
 * @package App\Repositories
 * @version December 19, 2021, 10:49 pm UTC
*/

class DocumentationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'description',
        'typeDoc_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Documentation::class;
    }
}
