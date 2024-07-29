<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\UserSettingController
 */
class UserSettingControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function show_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('');

        $userSetting = \App\Models\UserSetting::factory()->create();
        $userSettings = \App\Models\UserSetting::factory()->times(3)->create();

        $response = $this->get(route('account-settings'));

        $response->assertOk();
        $response->assertViewIs('userSetting.show');
        $response->assertViewHas('userSettings', $userSettings);
       
    }

    // test cases...
}