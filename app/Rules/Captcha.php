<?php

namespace App\Rules;

use App\Source;
use Illuminate\Contracts\Validation\Rule;
use Image;

class Captcha implements Rule
{
    public $captcha;
    public $captchacode;
    
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($captcha, $captchacode)
    {
        $this->captcha  = $captcha;
        $this->captchacode = $captchacode;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $value === $captchacode;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The captcha code do not match.';
    }
}
