<?php

namespace App\Rules;

use App\Source;
use Illuminate\Contracts\Validation\Rule;
use Image;

class HexOrImage implements Rule
{
    public $file;
    public $hex;

    public function __construct($file, $hex)
    {
        $this->file = $file;
        $this->hex = $hex;
    }

    
    public function passes($attribute, $value)
    {   
        if(!$this->hex && !$this->file)
        {
            return false;        
        }
        else  if(!$this->hex && $this->file)
        {
            return true;   
        }
        else  if($this->hex && !$this->file)
        {  
            if(preg_match('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/iD', $this->hex)) 
            {  
                return true;
            } 
            else 
            {  
                return false;
            }     
        }
        else 
        {
            if(!preg_match('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/iD', $this->hex)) 
            {  
                return false;
            } 
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {   
        if(!$this->hex && !$this->file)
        {
            return 'Image or hex are required.';    
        }
        else  if(!$this->hex && $this->file)
        {
            return 'Image is required.';
        }
        else  if($this->hex && !$this->file)
        {  
            if(!preg_match('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/iD', $this->hex)) 
            {  
                return 'The hex color format is invalid.';
            }    
        }
        else 
        {
            if(!preg_match('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/iD', $this->hex)) 
            {  
                return 'The hex color format is invalid.';
            } 
        }
        
    }
}
