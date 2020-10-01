<?php

namespace Espl\EmployeeInfo\Controller\Employee;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Espl\EmployeeInfo\Model\Employee;
use Espl\EmployeeInfo\Model\ResourceModel\Employee as EmployeeResource;

class Add extends Action
{
  /**
   * @var Employee
   */
  private $employee;
  /**
   * @var EmployeeResource
   */
  private $employeeResource;

  /**
   * Add constructor.
   * @param Context $context
   * @param Employee $employee
   * @param EmployeeResource $employeeResource
   */
  public function __construct(
    Context $context,
    Employee $employee,
    EmployeeResource $employeeResource
  ) {
    parent::__construct($context);
    $this->employee = $employee;
    $this->employeeResource = $employeeResource;
  }

  /**
   * Execute action based on request and return result
   *
   * Note: Request will be added as operation argument in future
   *
   * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
   * @throws \Magento\Framework\Exception\NotFoundException
   */
  public function execute()
  {
    /* Get the post data */
    $data = $this->getRequest()->getParams();

    /* Set the data in the model */
    $employeeModel = $this->employee;
    $employeeModel->setData($data);

    try {
      /* Use the resource model to save the model in the DB */
      $this->employeeResource->save($employeeModel);
      $this->messageManager->addSuccessMessage("Employee information saved successfully!");
    } catch (\Exception $exception) {
      $this->messageManager->addErrorMessage(__("Error saving employee information"));
    }


    $redirect = $this->resultRedirectFactory->create();
    $redirect->setPath('employee-info');
    return $redirect;
  }
}
