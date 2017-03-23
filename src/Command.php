<?php

namespace MrClean;

/**
* primary @author purplebabar(lalung.alexandre@gmail.com)
*/
class Command
{

    protected $_flags;

    public function __construct(array $arguments)
    {
        $this->_flags = array();
        foreach ($arguments as $value)
        {
            if (preg_match("/--\w+/", $value))
            {
                $this->_flags[] = $value;
            }
        }
    }

    public function getFlags()
    {
        return $this->_flags;
    }

    public function hasFlags()
    {
        return count($this->_flags);
    }

    public function is($term)
    {
        if (in_array("--".$term, $this->_flags))
        {
            return true;
        }
        return false;
    }

}
