<?php namespace Tests\Repositories;

use App\Models\Documentation;
use App\Repositories\DocumentationRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class DocumentationRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var DocumentationRepository
     */
    protected $documentationRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->documentationRepo = \App::make(DocumentationRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_documentation()
    {
        $documentation = Documentation::factory()->make()->toArray();

        $createdDocumentation = $this->documentationRepo->create($documentation);

        $createdDocumentation = $createdDocumentation->toArray();
        $this->assertArrayHasKey('id', $createdDocumentation);
        $this->assertNotNull($createdDocumentation['id'], 'Created Documentation must have id specified');
        $this->assertNotNull(Documentation::find($createdDocumentation['id']), 'Documentation with given id must be in DB');
        $this->assertModelData($documentation, $createdDocumentation);
    }

    /**
     * @test read
     */
    public function test_read_documentation()
    {
        $documentation = Documentation::factory()->create();

        $dbDocumentation = $this->documentationRepo->find($documentation->id);

        $dbDocumentation = $dbDocumentation->toArray();
        $this->assertModelData($documentation->toArray(), $dbDocumentation);
    }

    /**
     * @test update
     */
    public function test_update_documentation()
    {
        $documentation = Documentation::factory()->create();
        $fakeDocumentation = Documentation::factory()->make()->toArray();

        $updatedDocumentation = $this->documentationRepo->update($fakeDocumentation, $documentation->id);

        $this->assertModelData($fakeDocumentation, $updatedDocumentation->toArray());
        $dbDocumentation = $this->documentationRepo->find($documentation->id);
        $this->assertModelData($fakeDocumentation, $dbDocumentation->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_documentation()
    {
        $documentation = Documentation::factory()->create();

        $resp = $this->documentationRepo->delete($documentation->id);

        $this->assertTrue($resp);
        $this->assertNull(Documentation::find($documentation->id), 'Documentation should not exist in DB');
    }
}
