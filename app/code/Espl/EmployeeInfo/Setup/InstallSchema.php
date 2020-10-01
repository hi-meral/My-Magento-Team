<?php

/**
 *
 * @package     magento2
 * @author      Jayanka Ghosh
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        https://codilar.com/
 */

namespace Espl\EmployeeInfo\Setup;


use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

  /**
   * Installs DB schema for a module
   *
   * @param SchemaSetupInterface $setup
   * @param ModuleContextInterface $context
   * @return void
   */
  public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
  {
    $this->createMyTable($setup);
  }

  protected function createMyTable(SchemaSetupInterface $setup)
  {
    $tableName = $setup->getTable("espl_employee");
    $table = $setup->getConnection()->newTable(
      $tableName
    )->addColumn(
      'id',
      Table::TYPE_INTEGER,
      null,
      ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
      'id'
    )->addColumn(
      'name',
      Table::TYPE_TEXT,
      100,
      ['nullable' => false]
    )->addColumn(
      'contact_number',
      Table::TYPE_TEXT,
      15,
      ['nullable' => false]
    )->addColumn(
      'email',
      Table::TYPE_TEXT,
      255,
      ['nullable' => false]
    )->addColumn(
      'created_at',
      Table::TYPE_TIMESTAMP,
      null,
      ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
      'Create date'
    )->setComment(
      'Espl Employee Info'
    );
    $setup->getConnection()->createTable($table);
  }
}
