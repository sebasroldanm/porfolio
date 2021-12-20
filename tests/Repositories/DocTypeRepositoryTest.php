<?php namespace Tests\Repositories;

use App\Models\DocType;
use App\Repositories\DocTypeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class DocTypeRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var DocTypeRepository
     */
    protected $docTypeRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->docTypeRepo = \App::make(DocTypeRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_doc_type()
    {
        $docType = DocType::factory()->make()->toArray();

        $createdDocType = $this->docTypeRepo->create($docType);

        $createdDocType = $createdDocType->toArray();
        $this->assertArrayHasKey('id', $createdDocType);
        $this->assertNotNull($createdDocType['id'], 'Created DocType must have id specified');
        $this->assertNotNull(DocType::find($createdDocType['id']), 'DocType with given id must be in DB');
        $this->assertModelData($docType, $createdDocType);
    }

    /**
     * @test read
     */
    public function test_read_doc_type()
    {
        $docType = DocType::factory()->create();

        $dbDocType = $this->docTypeRepo->find($docType->id);

        $dbDocType = $dbDocType->toArray();
        $this->assertModelData($docType->toArray(), $dbDocType);
    }

    /**
     * @test update
     */
    public function test_update_doc_type()
    {
        $docType = DocType::factory()->create();
        $fakeDocType = DocType::factory()->make()->toArray();

        $updatedDocType = $this->docTypeRepo->update($fakeDocType, $docType->id);

        $this->assertModelData($fakeDocType, $updatedDocType->toArray());
        $dbDocType = $this->docTypeRepo->find($docType->id);
        $this->assertModelData($fakeDocType, $dbDocType->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_doc_type()
    {
        $docType = DocType::factory()->create();

        $resp = $this->docTypeRepo->delete($docType->id);

        $this->assertTrue($resp);
        $this->assertNull(DocType::find($docType->id), 'DocType should not exist in DB');
    }
}
