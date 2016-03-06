<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 05/03/16
 * Time: 22:27
 */

namespace AppBundle\Utils;


abstract class Status extends \SplEnum
{
    const
        __default = 0
        , Particulier = 0
        , Professionel = 1
    ;

}