<?php

namespace Tests\Feature;

use App\Models\General\Role;
use App\Models\Roles\Employee;
use App\Models\Website\AboutUs;
use Error;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AboutUsTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function has_a_path()
    {
        $aboutUs = factory(AboutUs::class)->create([
            'id' => 1,
        ]);

        $this->assertSame('/about-us/1', $aboutUs->path());
    }

    /** @test */
    public function cannot_be_edited_by_a_guest()
    {
        $this->withExceptionHandling();

        $aboutUs = factory(AboutUs::class)->create([
            'name' => 'Entry One',
        ]);

        $payload = [
            'name' => $name = 'Entry One Changed',
        ];

        $this->expectException(Error::class);

        $this->patch(route('aboutus.update', $aboutUs->id), $payload);

        $this->assertDatabaseHas('about_us', [
            'name' => 'Entry One',
        ]);

        $this->get(route('aboutus'))->assertSee('Entry One');
    }

    /** @test */
    public function can_be_edited_only_by_admins()
    {
        $user = factory(Employee::class)->create();

        factory(Role::class)->create(['name' => 'superadmin', 'guard_name' => 'employee']);

        $user->assignRole('superadmin');

        $this->actingAs($user, $this->loginGuard());

        $aboutUs = factory(AboutUs::class)->create();

        $payload = [
            'name'        => $name = 'Entry One Changed',
            'job_title'   => 'Chief Executive Officer',
            'job_summary' => 'Blah blah blah',
        ];

        $response = $this->patch(route('aboutus.update', $aboutUs->id), $payload);

        $response->assertSessionHas('success_message');

        $response->assertRedirect(route('aboutus'));

        $this->assertDatabaseHas('about_us', $payload);
    }

    /**
     * Set login guard.
     *
     * @return string
     */
    private function loginGuard(): string
    {
        return 'employee';
    }

    /** @test */
    public function only_authorized_users_can_view_the_aboutus_form()
    {
        $user = factory(Employee::class)->create();

        factory(Role::class)->create(['name' => 'superadmin', 'guard_name' => 'employee']);

        $user->assignRole('superadmin');

        $this->actingAs($user, $this->loginGuard());

        $aboutUs = factory(AboutUs::class)->create();

        $response = $this->get(route('aboutus.edit', $aboutUs->id));

        $response->assertViewIs('static-site.forms.aboutus');
    }
}
