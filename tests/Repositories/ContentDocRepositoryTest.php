<?php namespace Tests\Repositories;

use App\Models\ContentDoc;
use App\Repositories\ContentDocRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ContentDocRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ContentDocRepository
     */
    protected $contentDocRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->contentDocRepo = \App::make(ContentDocRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_content_doc()
    {
        $contentDoc = ContentDoc::factory()->make()->toArray();

        $createdContentDoc = $this->contentDocRepo->create($contentDoc);

        $createdContentDoc = $createdContentDoc->toArray();
        $this->assertArrayHasKey('id', $createdContentDoc);
        $this->assertNotNull($createdContentDoc['id'], 'Created ContentDoc must have id specified');
        $this->assertNotNull(ContentDoc::find($createdContentDoc['id']), 'ContentDoc with given id must be in DB');
        $this->assertModelData($contentDoc, $createdContentDoc);
    }

    /**
     * @test read
     */
    public function test_read_content_doc()
    {
        $contentDoc = ContentDoc::factory()->create();

        $dbContentDoc = $this->contentDocRepo->find($contentDoc->id);

        $dbContentDoc = $dbContentDoc->toArray();
        $this->assertModelData($contentDoc->toArray(), $dbContentDoc);
    }

    /**
     * @test update
     */
    public function test_update_content_doc()
    {
        $contentDoc = ContentDoc::factory()->create();
        $fakeContentDoc = ContentDoc::factory()->make()->toArray();

        $updatedContentDoc = $this->contentDocRepo->update($fakeContentDoc, $contentDoc->id);

        $this->assertModelData($fakeContentDoc, $updatedContentDoc->toArray());
        $dbContentDoc = $this->contentDocRepo->find($contentDoc->id);
        $this->assertModelData($fakeContentDoc, $dbContentDoc->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_content_doc()
    {
        $contentDoc = ContentDoc::factory()->create();

        $resp = $this->contentDocRepo->delete($contentDoc->id);

        $this->assertTrue($resp);
        $this->assertNull(ContentDoc::find($contentDoc->id), 'ContentDoc should not exist in DB');
    }
}
