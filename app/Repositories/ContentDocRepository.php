<?php

namespace App\Repositories;

use App\Models\ContentDoc;
use App\Repositories\BaseRepository;

/**
 * Class ContentDocRepository
 * @package App\Repositories
 * @version December 20, 2021, 2:41 am UTC
*/

class ContentDocRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'description',
        'code',
        'language',
        'documentation_id'
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
        return ContentDoc::class;
    }
}
