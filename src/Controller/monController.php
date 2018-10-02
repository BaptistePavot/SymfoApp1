<?php
/**
 * Created by PhpStorm.
 * User: baptistepavot
 * Date: 02/10/2018
 * Time: 17:18
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class monController
{
    public function ref($ref)
    {
        return new Response(
            '<html><body>Numéro du livre : '.$ref.'</body></html>'
        );
    }
}