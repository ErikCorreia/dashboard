<?php

namespace Core\Controllers;

use DI\Container;
use Core\Controllers\BaseController;

// Entities
use Entity\User;
use Entity\UserModule;

class AdminController extends BaseController
{
    public function __construct(Container $container)
    {
        // inicia o contrutor pai
        parent::__construct($container);

        // Seta o caminho dos templates das paginas e layput logado/não logado
        $this->view->setTemplatePath(__DIR__ . '/../../admin/resources/');
        $container->get('session')->has('user') ? $this->view->setLayout('layout/default.php') : $this->view->setLayout('layout/default-not-loged.php');


        $user = $this->getSession()->has('user')
            ? $this->em->getRepository(User::class)->find($this->getSession('user'))
            : null;

        if($user){
            $this->validateModules($user, $user->getModules());
            $this->view->addAttribute('user_modules', $user->getModules());
        }

        $this->view->addAttribute('modules', $this->modules);
        $this->view->addAttribute('current_user', $user);
    }

    public function getSession($key = null)
    {
        return $key ? $this->container->get('session')->get($key) : $this->container->get('session');
    }

    //Atualiza os modulos definidos com o registro no banco
    public function validateModules($user, $user_modules)
    {
        // Remover modulos deletados da pasta de modulos
    
        // Registra os modulos mapeados 
        foreach ($this->modules as $module) {
            $um = $this->em->getRepository(UserModule::class)->findOneBy(['slug' => $module['slug']]);
            if ($um) {
                $umToUpdate = $this->em->find(UserModule::class, $um->getId());
                $umToUpdate->setName($module['name']);
                $umToUpdate->setSlug($module['slug']);
                $umToUpdate->setDescription($module['description']);

                $this->em->persist($umToUpdate);
                $this->em->flush();
            }else{
                $usermodule = new UserModule();
                $usermodule->setName($module['name']);
                $usermodule->setSlug($module['slug']);
                $usermodule->setDescription($module['description']);

                $this->em->persist($usermodule);
                $this->em->flush();
            }
        }
    }
}
