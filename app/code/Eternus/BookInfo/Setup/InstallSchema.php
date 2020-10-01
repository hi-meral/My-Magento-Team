<?php
namespace Eternus\BookInfo\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();
        if (!$installer->tableExists('book_info')) {
        $table = $installer->getConnection()
            ->newTable($installer->getTable('book_info'))
            ->addColumn('book_id', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, 
                null, 
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true], 
                'Book ID')
            ->addColumn('book_name', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 
                null, []
                , 'Book Name')
            ->addColumn('author_name', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 
                20, [], 
                'Author Name')
            ->addColumn('price', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, 
                20, [], 
                'Book Price')
            ->addColumn('created_at',\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                'Created At')
            ->addColumn('updated_at',\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                'Updated At')
            ->setComment('Book information');
        $installer->getConnection()->createTable($table);
        }
        $installer->endSetup();

    }
}
