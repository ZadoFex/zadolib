<?php 
namespace Utils;


class ZadoHello
{
    public static function hello()
    {
        return 'Hello zado utils lib !\n';
    }

    public static function NewGuid()
    {
        $s = strtoupper(md5(uniqid(rand(),true))); 
		$guidText = 
			substr($s,0,8) . '-' . 
			substr($s,8,4) . '-' . 
			substr($s,12,4). '-' . 
			substr($s,16,4). '-' . 
			substr($s,20); 
		return $guidText;
    }
}


