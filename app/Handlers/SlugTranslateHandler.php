<?php

namespace App\Handlers;

class SlugTranslateHandler
{
    public function translate($text){
        return rand(1,10);
    }
}