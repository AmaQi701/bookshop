<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MakeUserController
{
    public function __invoke() : Response
    {
       	return new Response('{"message":"Hello, World!"}');
    }

}