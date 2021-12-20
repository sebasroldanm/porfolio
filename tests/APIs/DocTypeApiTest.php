<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\DocType;

class DocTypeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_doc_type()
    {
        $docType = DocType::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/doc_types', $docType
        );

        $this->assertApiResponse($docType);
    }

    /**
     * @test
     */
    public function test_read_doc_type()
    {
        $docType = DocType::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/doc_types/'.$docType->id
        );

        $this->assertApiResponse($docType->toArray());
    }

    /**
     * @test
     */
    public function test_update_doc_type()
    {
        $docType = DocType::factory()->create();
        $editedDocType = DocType::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/doc_types/'.$docType->id,
            $editedDocType
        );

        $this->assertApiResponse($editedDocType);
    }

    /**
     * @test
     */
    public function test_delete_doc_type()
    {
        $docType = DocType::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/doc_types/'.$docType->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/doc_types/'.$docType->id
        );

        $this->response->assertStatus(404);
    }
}
