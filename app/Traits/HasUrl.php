<?php


namespace App\Traits;


trait HasUrl
{
    public function url()
    {
        if(! is_null($this->path) ) {
            return '/' . $this->path . '/' . $this->slug;
        }
        return $this->slug;
    }

    public function absoluteUrl()
    {
        if(! is_null($this->path) ) {
            return url('/') . '/' .$this->path . '/' .$this->slug;
        }
        return url('/') . '/' .$this->slug;
    }
}
