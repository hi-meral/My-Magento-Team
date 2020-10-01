<?php

namespace Espl\ElectricityProviderDetails\Controller\Provider;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Espl\ElectricityProviderDetails\Model\ElectricityProvider;
use Espl\ElectricityProviderDetails\Model\ResourceModel\ElectricityProvider as ProviderResource;

class Add extends Action
{
    private $provider;
   
    private $providerResource;

    public function __construct(
        Context $context,
        ElectricityProvider $provider,
        ProviderResource $providerResource
    )
    {
        parent::__construct($context);
        $this->provider = $provider;
        $this->providerResource = $providerResource;
    }

    public function execute()
    {


        /* Get the post data */
        $data = $this->getRequest()->getParams();

        /* Set the data in the model */
        $providerModel = $this->provider;
        $providerModel->setData($data);

        try {
            /* Use the resource model to save the model in the DB */
            $this->providerResource->save($providerModel);
            $this->messageManager->addSuccessMessage("Provider saved successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving provider"));
        }

        /* Redirect back to cars page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('electricityproviderdetails');
        return $redirect;
    }
}