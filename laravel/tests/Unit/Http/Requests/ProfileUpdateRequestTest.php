<?php

namespace Tests\Unit\Http\Requests;

use Tests\TestCase;

/**
 * @see \App\Http\Requests\ProfileUpdateRequest
 */
class ProfileUpdateRequestTest extends TestCase
{
    /** @var \App\Http\Requests\ProfileUpdateRequest */
    private $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = new \App\Http\Requests\ProfileUpdateRequest();
    }

    /**
     * @test
     */
    public function rules(): void
    {
        $this->markTestIncomplete('');

        $actual = $this->subject->rules();

        $this->assertValidationRules([
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
            ],
        ], $actual);
    }

    // test cases...
}
