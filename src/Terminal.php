<?php

namespace MrClean;

/**
* primary @author purplebabar(lalung.alexandre@gmail.com)
*/
class Terminal
{
    private $success="\033[0;32m";
    private $error="\033[0;31m";
    private $nc="\033[0m"; # No Color

    public function write($text, $line = true)
    {
        echo $line ? $text."\n" : $text;
    }

    public function error($text, $line = true)
    {
        $text = $this->error.$text.$this->nc;
        echo $line ? $text."\n" : $text;
    }

    public function success($text, $line = true)
    {
        $text = $this->success.$text.$this->nc;
        echo $line ? $text."\n" : $text;
    }
}
