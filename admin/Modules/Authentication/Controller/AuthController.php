<?php

namespace Admin\Modules\Authentication\Controller;

use Admin\Modules\Users\Models\User;
use Core\Controllers\AdminController;

class AuthController extends AdminController
{
    public function index($request, $response, $args)
    {
        return $this->view->render($response, 'views/auth/login.php', [
            'title' => 'Login',
            'status' => isset($args['status']) ? $args['status'] : null,
        ]);
    }
    public function login($request, $response, $args)
    {
        try {

            $params = $request->getParsedBody();

            $user = $this->em->getRepository(\Entity\User::class)->findOneBy(['email' => $params['email']]);

            if (!$user) {
                throw new \Exception('User not found');
            }

            if (!password_verify($params['password'], $user->getPassword())) {
                throw new \Exception('Invalid password');
            };

            $this->container->get('session')->set('user', $user);

            return $response->withHeader('Location', '/admin')->withStatus(302);

        } catch (\Exception $e) {
            $args['status'] = $e->getMessage();
            return $this->index($request, $response, $args);
        }
    }
    public function logout($request, $response, $args)
    {
        $this->container->get('session')->delete('user');
        $this->container->get('session')->destroy();

        return $response->withHeader('Location', '/admin')->withStatus(302);
    }
}
