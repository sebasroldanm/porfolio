<?php

namespace App\Repositories;

use App\Models\DocType;
use App\Repositories\BaseRepository;

/**
 * Class DocTypeRepository
 * @package App\Repositories
 * @version December 19, 2021, 10:40 pm UTC
*/

class DocTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'tag'
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
        return DocType::class;
    }
}
