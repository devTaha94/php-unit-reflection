<?php namespace Src;

class Item
{
    /**
     * Get and random token
     * @return string the token
     */
    private function getToken():string
    {
       return uniqid('', true);
    }
    /**
     * Get and random prefixed token
     * @param string $prefix
     * @return string the token
     */
    private function getPrefixedToken(string $prefix):string
    {
       return uniqid($prefix, true);
    }
}