<?php

namespace Tests\Unit\Http\Requests\Auth;

use Tests\TestCase;

/**
 * @see \App\Http\Requests\Auth\LoginRequest
 */
class LoginRequestTest extends TestCase
{
    /** @var \App\Http\Requests\Auth\LoginRequest */
    private $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = new \App\Http\Requests\Auth\LoginRequest();
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
            'email' => [
                'required',
                'string',
            ],
            'password' => [
                'required',
                'string',
            ],
        ], $actual);
    }

    // test cases...
}
