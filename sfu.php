<?php

use Doctrine\ORM\Mapping\Entity;
use Entity\User;

require __DIR__.'/config/doctrine.php';

$user = new \Entity\User();
$user->setUsername('admin');
$user->setEmail('admin@gmail.com');
$user->setPassword(password_hash('123456', PASSWORD_BCRYPT));
$user->setRole('admin');

$entityManager->persist($user);
$entityManager->flush();

try{

    $user = $entityManager->getRepository(User::class)->findOneBy(['username' => 'admin']);
    
    if ($user === null) {
        throw new \Exception('User not found');
    }

    echo $user->getUsername(). PHP_EOL;
    echo $user->getEmail(). PHP_EOL;


}catch(\Exception $e){
    echo $e->getMessage();
}
