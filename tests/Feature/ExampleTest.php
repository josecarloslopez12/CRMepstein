<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    use RefreshDatabase;

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_non_admin_cannot_delete_cliente(): void
    {
        // crear usuario regular y cliente
        $user = \App\Models\User::factory()->create(['role' => 'usuario']);
        $cliente = \App\Models\Cliente::factory()->create();

        $response = $this->actingAs($user)->delete(route('clientes.destroy', $cliente));
        $response->assertStatus(403);
        $this->assertDatabaseHas('clientes', ['id' => $cliente->id]);
    }

    public function test_admin_can_delete_cliente(): void
    {
        $admin = \App\Models\User::factory()->create(['role' => 'admin']);
        $cliente = \App\Models\Cliente::factory()->create();

        $response = $this->actingAs($admin)->delete(route('clientes.destroy', $cliente));
        $response->assertRedirect(route('clientes.index'));
        $this->assertDatabaseMissing('clientes', ['id' => $cliente->id]);
    }
}
