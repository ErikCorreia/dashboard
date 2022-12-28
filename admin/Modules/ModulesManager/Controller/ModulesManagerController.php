<?php

namespace Admin\Modules\ModulesManager\Controller;

use Core\Controllers\AdminController;
use Entity\UserModule;
use Entity\User;

class ModulesManagerController extends AdminController
{
    public function index($request, $response, $args)
    {
        try{
            
            return $this->view->render($response, 'views/modules-manager/modules-manager.php', [
                'title' => 'Modules Manager',
                'users' => $this->em->getRepository(User::class)->findAll(),
                'currentUser' => $this->em->getRepository(User::class)->find($this->container->get('session')->get('user')),
                'modules' => $this->modules,
            ]);

        }catch(\Exception $e){
            echo $e->getMessage();
            die;
        }
    }
    public function postModule($request, $response, $args)
    {
        try{

            $params = $request->getParsedBody();
        
            $user = $this->em->getReference(User::class, $params['module']['user_id']);

            $module = $this->em->getRepository(UserModule::class)->findOneBy(['slug' => $params['module']['slug']]);
            
            $params['module']['isActive'] ? $user->addModule($this->em->find(UserModule::class, $module->getId())) : $user->removeModule($this->em->find(UserModule::class, $module->getId()));

            $this->em->persist($user);
            $this->em->flush();

            $response->getBody()->write(json_encode([
                'status' => 'success',
                'message' => $params['module']['isActive'] ? 'Modulo adicionado com sucesso' : 'Module removido com sucesso',
                'params' => $params,
                'module' => $module
            ]));

        }catch(\Exception $e){
            $response->getBody()->write(json_encode([
                'status' => 'error',
                'params' => $params,
                'module' => $module->getId(),
                'user' => $user->getId(),
                'message' => $e->getMessage()
            ]));
        }

        return $response->withHeader('Content-Type', 'application/json')->withStatus(302);
    }
}
