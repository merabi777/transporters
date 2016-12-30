<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Manage\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Manage\Entity\User as User;
use Manage\Entity\Bids as Bids;

class IndexController extends AbstractActionController {

    /**
     * Entity manager.
     * @var Doctrine\ORM\EntityManager
     */
    private $entityManager;

    public function __construct($entityManager) {
        $this->entityManager = $entityManager;
    }

    public function indexAction() {
//        $user = new User();
//        $user->setAddress("test address");

        $UserEntity = $this->entityManager->getRepository(User::class);
        $BidsEntity = $this->entityManager->getRepository(Bids::class);
        $users = $UserEntity->findAll();
        $bids = $BidsEntity->findAll();
        return new ViewModel(["users" => $users, "bids" => $bids]);
    }

    public function setAction() {
        die("set");
    }

}
