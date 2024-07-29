<?php

namespace Tests\Unit\Http\Requests;

use Tests\TestCase;

/**
 * @see \App\Http\Requests\UserSettingStoreRequest
 */
class UserSettingStoreRequestTest extends TestCase
{
    /** @var \App\Http\Requests\UserSettingStoreRequest */
    private $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = new \App\Http\Requests\UserSettingStoreRequest();
    }

    /**
     * @test
     */
    public function authorize(): void
    {
        $this->markTestIncomplete('');

        $actual = $this->subject->authorize();

        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function rules(): void
    {
        $this->markTestIncomplete('');

        $actual = $this->subject->rules();

        $this->assertValidationRules([
            'userSetting' => [
                'required',
            ],
        ], $actual);
    }

    // test cases...
}
