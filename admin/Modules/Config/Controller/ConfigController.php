<?php

namespace Admin\Modules\Config\Controller;

use Core\Controllers\AdminController;
use Respect\Validation\Validator as v;

class ConfigController extends AdminController
{
    public function __invoke($request, $response, $args)
    {
        return $this->view->render($response, 'views/config/config.php', [
            'title' => 'Config'
        ]);
    }

    public function postInsert($request,$response, $args)
    {
        try{
         
            $params = $request->getParsedBody();

            if($config = $this->em->getRepository(\Entity\Config::class)->find(1)){
                
                $config->setTitle($params['title']);
                $config->setDescription($params['description']);
                $config->setGoogleAnalyticsMetricId($params['google_metric_id']);
                $this->em->persist($config);
                $this->em->flush();
            }else{
                $config = new \Entity\Config;
                $config->setTitle($params['title']);
                $config->setDescription($params['description']);
                $config->setGoogleAnalyticsMetricId($params['google_metric_id']);
    
                $this->em->persist($config);
                $this->em->flush();
            }

            return $response->withHeader('Location', '/admin/config')->withStatus(302);

        }catch(\Exception $e){
            die($e->getMessage());
            // return $response->withHeader('Location', '/admin/config')->withStatus(302);
        }
    }
}
