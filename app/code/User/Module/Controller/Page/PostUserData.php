<?php
namespace User\Module\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use User\Module\Model\PostUser;
use User\Module\Model\ResourceModel\PostUser as postUserResource;

class PostUserData extends Action
{
    private $postUser;
    private $postUserResource;

    public function __construct(
        Context $context,
        PostUser $postUser,
        postUserResource $postUserResource
    )
    {
        parent::__construct($context);
        $this->postUser = $postUser;
        $this->userResource = $postUserResource;
    }

    public function execute()
    {
      
        $userData = $this->getRequest()->getParams();
        $userDataModel = $this->postUser;
        $userDataModel->setData($userData);

         ////save into db
            $this->userResource->save($userDataModel);
            $this->messageManager->addSuccessMessage("Success");
        
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('userdataModule/page/view');
        return $redirect;
    }
}