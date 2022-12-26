<?php

namespace Admin\Middlewares;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Psr7\Response;

class AuthMiddleware extends Middleware
{
    public function __invoke(Request $request, RequestHandler $handler)
    {
        $response = $handler->handle($request);

        if(!$this->container->get('session')->has('user')){
            return $response->withHeader('Location', '/admin/login')->withStatus(302);
        }

        return $response;
    }
}
