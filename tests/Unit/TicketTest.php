<?php

namespace Tests\Unit;

use App\Models\Roles\Vendor;
use App\Models\Support\Department;
use App\Models\Support\Status;
use App\Models\Support\Ticket;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TicketTest extends TestCase
{

    use RefreshDatabase;

    protected $department;

    protected $role;

    protected $status;

    protected $ticket;

    /** @test */
    public function a_ticket_has_a_department()
    {
        $this->assertNotNull($this->ticket->department);
    }

    /** @test */
    public function a_ticket_has_a_status()
    {
        $this->assertNotNull($this->ticket->status);
    }

    /** @test */
    public function a_ticket_has_a_technician()
    {
        $this->assertNotNull($this->ticket->technician());
    }

    /** @test */
    public function a_ticket_has_a_user()
    {
        $this->assertNotNull($this->ticket->user);
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->department = factory(Department::class)->create();

        $this->role = factory(Vendor::class)->create();

        $this->status = factory(Status::class)->create();

        $this->ticket = factory(Ticket::class)->create([
            'department_id'   => $this->department->id,
            'status_id'       => $this->status->id,
            'ticketable_type' => 'App\Models\Roles\Vendor',
            'ticketable_id'   => 1,
        ]);
    }
}
