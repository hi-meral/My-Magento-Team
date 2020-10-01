<?php
namespace Espl\ElectricityProviderDetails\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();
        if (!$installer->tableExists('espl_electricityproviders_info')) {

            $table = $installer->getConnection()
                ->newTable($installer->getTable('espl_electricityproviders_info'))
                ->addColumn('provider_id', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true], 'Provider ID')
                ->addColumn('provider_name', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 225, ['nullable' => false], 'Provider Name')
                ->addColumn('contact_number', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 15, [], 'Contact Number')
                ->addColumn('contact_email', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, [], 'Contact Email')
                ->addColumn('terms_in_months', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, [], 'Terms in months')
                ->addColumn('created_at', \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP, null, ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT], 'Created At')
                ->addColumn('updated_at', \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP, null, ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE], 'Updated At')
                ->setComment('Electricity Providers Info');
            $installer->getConnection()->createTable($table);

            $installer->endSetup();

        }
    }
}
