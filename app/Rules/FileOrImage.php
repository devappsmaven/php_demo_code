<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Image;

class FileOrImage implements Rule
{
    public $file;
    public $image;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($file, $image)
    {
        $this->file = $file;
        $this->image = $image;
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
        if(!$this->image && !$this->file)
        {
            return false;        
        }
        else  if(!$this->image && $this->file)
        {
            return true;   
        }
        else  if($this->image && !$this->file)
        {  
            return true;            
        }
        
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        if(!$this->image && !$this->file)
        {
            return 'Image or image are required.';    
        }
        else  if(!$this->image && $this->file)
        {
            return 'Image is required.';
        }
        else  if($this->image && !$this->file)
        {  
            return 'File is required.';
        }        
    }
}
