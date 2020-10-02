<?php

namespace User\Module\Controller\Service;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use User\Module\Model\PostUser;
use User\Module\Model\ResourceModel\PostUser as UserResource;

class PostUserService extends Action
{
    private $user;
    private $userResource;

    public function __construct(
        Context $context,
        PostUser $user,
        UserResource $userResource
    )
    {
        parent::__construct($context);
        $this->user = $user;
        $this->userResource = $userResource;
    }

    public function execute()
    {
     ///save user to db ///// WIP
        $userModel = $this->user;
        $userModel->setData($this->getRequest()->getParams());
        $this->userResource->save($userModel);
        }
}