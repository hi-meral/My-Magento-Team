<?php
namespace User\Module\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
	public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
		$installer = $setup;
		$installer->startSetup();
		if (!$installer->tableExists('eternus_userTb')) {
			$table = $installer->getConnection()->newTable(
				$installer->getTable('eternus_userTb')
			)
				->addColumn(
					'user_id',
					\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
					null,
					[
						'identity' => true,
						'nullable' => false,
						'primary'  => true,
						'unsigned' => true,
					],
					'USER ID'
				)
				->addColumn(
					'name',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					['nullable => false'],
					'USER Name'
				)
				->addColumn(
					'email',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					[],
					'USER EMAIL'
				)
				->addColumn(
					'city',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					[],
					'USER CITY'
				)
				->setComment('ETERNUS_USERTB Table');
			$installer->getConnection()->createTable($table);

		}
		$installer->endSetup();
	}
}
