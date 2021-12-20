<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\ContentDoc;

class ContentDocApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_content_doc()
    {
        $contentDoc = ContentDoc::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/content_docs', $contentDoc
        );

        $this->assertApiResponse($contentDoc);
    }

    /**
     * @test
     */
    public function test_read_content_doc()
    {
        $contentDoc = ContentDoc::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/content_docs/'.$contentDoc->id
        );

        $this->assertApiResponse($contentDoc->toArray());
    }

    /**
     * @test
     */
    public function test_update_content_doc()
    {
        $contentDoc = ContentDoc::factory()->create();
        $editedContentDoc = ContentDoc::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/content_docs/'.$contentDoc->id,
            $editedContentDoc
        );

        $this->assertApiResponse($editedContentDoc);
    }

    /**
     * @test
     */
    public function test_delete_content_doc()
    {
        $contentDoc = ContentDoc::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/content_docs/'.$contentDoc->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/content_docs/'.$contentDoc->id
        );

        $this->response->assertStatus(404);
    }
}
