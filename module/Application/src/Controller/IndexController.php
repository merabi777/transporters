<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

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

        $TvirtebiEntity = $this->entityManager->getRepository(\Application\Entity\Tvirtebi::class);
        $TvirtebiData = $TvirtebiEntity->findAll();

        return new ViewModel(["tvirtebi" => $TvirtebiData]);
    }

    public function detailAction() {
        $id = $this->params()->fromRoute("id");
        $TvirtebiEntity = $this->entityManager->getRepository(\Application\Entity\Tvirtebi::class);
        $CommentsEntity = $this->entityManager->getRepository(\Application\Entity\Comments::class);
        $TvirtebiData = $TvirtebiEntity->find($id);
        $comments = $CommentsEntity->findBy(['tvirti_id' => $id]);

        return new ViewModel(["tvirtisDetail" => $TvirtebiData, 'comments' => $comments]);
    }

    public function applyAction() {
        $id = $this->params()->fromRoute("id");
        return new JsonModel([
            'status' => 'SUCCESS',
            'message' => 'Here is your data',
            'id'=>$id,
            'data' => [
                'full_name' => 'John Doe',
                'address' => '51 Middle st.'
            ]
        ]);
    }

    public function sendapplyAction() {
        $bidsEntity = $this->entityManager->getRepository(\Bids\Entity\Bids::class);
        $loadid = $this->_getParam("loadid");
        $bid_content = $this->_getParam("bid_content");
        if ($this->view->user["id"] > 0) {
            if (isset($loadid) && isset($bid_content)) {
                $bidsEntity->setLoadId($loadid);
                $bidsEntity->setUserId(1);
                $bidsEntity->setText($bid_content);
                $bidsEntity->setAddDate(date("Y-m-d H:i:s"));
                $bidsEntity->setIpAddr($_SERVER["REMOTE_ADDR"]);
                $bidsEntity->save();
                echo '<p class="green">Your bid has sended.</p>';
            } else {
                echo '<p class="red">Invalid params.</p>';
            }
        }
        return new JsonModel([
            'status' => 'SUCCESS',
            'message' => 'Here is your data',
            'data' => [
                'full_name' => 'John Doe',
                'address' => '51 Middle st.'
            ]
        ]);
    }

}
