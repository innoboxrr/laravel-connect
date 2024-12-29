<?php

namespace Innoboxrr\LaravelConnect\Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Innoboxrr\LaravelConnect\Tests\TestCase;

class PlatformConnectionEndpointsTest extends TestCase
{

    use RefreshDatabase,
        WithFaker;

    public function test_platform_connection_policies_endpoint()
    {

        $platformConnection = \Innoboxrr\LaravelConnect\Models\PlatformConnection::factory()->create();
        
        $headers = [
            'Authorization' => config('test.token'),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];  

        $payload = [
            'id' => $platformConnection->id
        ];

        $this->json('GET', '/api/innoboxrr/laravelconnect/platform-connection/policies', $payload, $headers)
            ->assertStatus(200);

    }

    public function test_platform_connection_policy_endpoint()
    {
        $headers = [
            'Authorization' => config('test.token'),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];  

        $payload = [
            'policy' => 'index'
        ];

        $this->json('GET', '/api/innoboxrr/laravelconnect/platform-connection/policy', $payload, $headers)
            ->assertJsonStructure([
                'index'
            ])
            ->assertStatus(200);

    }

    public function test_platform_connection_index_auth_endpoint()
    {

        $headers = [
            'Authorization' => config('test.token'),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];  

        $payload = [
            'managed' => true
        ];

        $this->json('GET', '/api/innoboxrr/laravelconnect/platform-connection/index', $payload, $headers)
            ->assertStatus(200);

    }

    public function test_platform_connection_index_guest_endpoint()
    {

        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];  

        $payload = [
            'managed' => true
        ];

        $this->json('GET', '/api/innoboxrr/laravelconnect/platform-connection/index', $payload, $headers)
            ->assertStatus(401);
            
    }
    
    public function test_platform_connection_show_auth_endpoint()
    {

        $platformConnection = \Innoboxrr\LaravelConnect\Models\PlatformConnection::latest()->first();

        $headers = [
            'Authorization' => config('test.token'),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];  

        $payload = [
            'platform_connection_id' => $platformConnection->id
        ];

        $this->json('GET', '/api/innoboxrr/laravelconnect/platform-connection/show', $payload, $headers)
            ->assertStatus(200);
            
    }

    public function test_platform_connection_show_guest_endpoint()
    {

        $platformConnection = \Innoboxrr\LaravelConnect\Models\PlatformConnection::latest()->first();

        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];  

        $payload = [
            'platform_connection_id' => $platformConnection->id
        ];

        $this->json('GET', '/api/innoboxrr/laravelconnect/platform-connection/show', $payload, $headers)
            ->assertStatus(401);
            
    }

    public function test_platform_connection_create_endpoint()
    {

        $user = \Innoboxrr\LaravelConnect\Models\User::first();

        $headers = [
            'Authorization' => config('test.token'),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];  

        $payload = \Innoboxrr\LaravelConnect\Models\PlatformConnection::factory()->make()->getAttributes();

        $this->json('POST', '/api/innoboxrr/laravelconnect/platform-connection/create', $payload, $headers)
            ->assertStatus(201);
            
    }

    public function test_platform_connection_update_endpoint()
    {

        $platformConnection = \Innoboxrr\LaravelConnect\Models\PlatformConnection::factory()->create();

        $headers = [
            'Authorization' => config('test.token'),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];  

        $payload = [
            ...\Innoboxrr\LaravelConnect\Models\PlatformConnection::factory()->make()->getAttributes(),
            'platform_connection_id' => $platformConnection->id
        ];

        $this->json('PUT', '/api/innoboxrr/laravelconnect/platform-connection/update', $payload, $headers)
            ->assertStatus(200);
            
    }

    public function test_platform_connection_delete_endpoint()
    {

        $platformConnection = \Innoboxrr\LaravelConnect\Models\PlatformConnection::latest()->first();

        $headers = [
            'Authorization' => config('test.token'),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];  

        $payload = [
            'platform_connection_id' => $platformConnection->id
        ];

        $this->json('DELETE', '/api/innoboxrr/laravelconnect/platform-connection/delete', $payload, $headers)
            ->assertStatus(200);
            
    }

    public function test_platform_connection_restore_endpoint()
    {

        $platformConnection = \Innoboxrr\LaravelConnect\Models\PlatformConnection::first();

        $headers = [
            'Authorization' => config('test.token'),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];  

        $payload = [
            'platform_connection_id' => $platformConnection->id
        ];

        $this->json('POST', '/api/innoboxrr/laravelconnect/platform-connection/restore', $payload, $headers)
            ->assertStatus(200);
            
    }

    public function test_platform_connection_force_delete_endpoint()
    {

        $platformConnection = \Innoboxrr\LaravelConnect\Models\PlatformConnection::latest()->first();

        $headers = [
            'Authorization' => config('test.token'),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];  

        $payload = [
            'platform_connection_id' => $platformConnection->id
        ];

        $this->json('DELETE', '/api/innoboxrr/laravelconnect/platform-connection/force-delete', $payload, $headers)
            ->assertStatus(403);
            
    }

    public function test_platform_connection_export_endpoint()
    {   

        $headers = [
            'Authorization' => config('test.token'),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];  

        $payload = [
            //
        ];

        $this->json('POST', '/api/innoboxrr/laravelconnect/platform-connection/export', $payload, $headers)
            ->assertStatus(200);
            
    }

}
