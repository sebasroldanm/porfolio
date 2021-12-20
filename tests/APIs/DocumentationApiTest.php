<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Documentation;

class DocumentationApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_documentation()
    {
        $documentation = Documentation::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/documentations', $documentation
        );

        $this->assertApiResponse($documentation);
    }

    /**
     * @test
     */
    public function test_read_documentation()
    {
        $documentation = Documentation::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/documentations/'.$documentation->id
        );

        $this->assertApiResponse($documentation->toArray());
    }

    /**
     * @test
     */
    public function test_update_documentation()
    {
        $documentation = Documentation::factory()->create();
        $editedDocumentation = Documentation::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/documentations/'.$documentation->id,
            $editedDocumentation
        );

        $this->assertApiResponse($editedDocumentation);
    }

    /**
     * @test
     */
    public function test_delete_documentation()
    {
        $documentation = Documentation::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/documentations/'.$documentation->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/documentations/'.$documentation->id
        );

        $this->response->assertStatus(404);
    }
}
