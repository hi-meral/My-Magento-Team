<?php

/**
 *
 * @package     magento2
 * @author      Codilar Technologies
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        https://www.codilar.com/
 */

namespace Espl\EmployeeInfo\Block;

use Magento\Framework\View\Element\Template;
use Espl\EmployeeInfo\Model\ResourceModel\Employee\Collection;

class Employee extends Template
{

  /**
   * @var Collection
   */
  private $collection;

  /**
   * Employee constructor.
   * @param Template\Context $context
   * @param Collection $collection
   * @param array $data
   */
  public function __construct(
    Template\Context $context,
    Collection $collection,
    array $data = []
  ) {
    parent::__construct($context, $data);
    $this->collection = $collection;
  }
  public function getAddEmployeeText()
  {
    return "Add Employee";
  }

  

  public function getAllEmployees()
  {
    return $this->collection;
  }

  public function getAddEmployeeUrl()
  {
    return $this->getUrl('employeeinfo/employee/add');
  }
}
