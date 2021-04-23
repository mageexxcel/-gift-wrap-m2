<?php


namespace Excellence\Giftwrap\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
		$installer = $setup;
		$installer->startSetup();

		/**
		 * Creating table excellence_giftwrap
		 */
		$table = $installer->getConnection()->newTable(
			$installer->getTable('excellence_giftwrap')
		)->addColumn(
			'giftwrap_id',
			\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			null,
			['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
			'Entity Id'
		)->addColumn(
			'title',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			255,
			['nullable' => true],
			'News Title'
		)->addColumn(
			'store',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			255,
			['nullable' => true,'default' => null],
			'store'
		)->addColumn(
			'image',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			null,
			['nullable' => true,'default' => null],
			'GiftWrap image media path'
		)->addColumn(
			'price',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			255,
			['nullable' => true,'default' => null],
			'price'
		)->addColumn(
			'is_active',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			255,
			['nullable' => true,'default' => null],
			'is_active'
		)->addColumn(
			'created_at',
			\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
			null,
			['nullable' => false],
			'Created At'
		)->addColumn(
			'published_at',
			\Magento\Framework\DB\Ddl\Table::TYPE_DATE,
			null,
			['nullable' => true,'default' => null],
			'World publish date'
		)->addIndex(
			$installer->getIdxName(
				'excellence_giftwrap',
				['published_at'],
				\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_INDEX
			),
			['published_at'],
			['type' => \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_INDEX]
		)->setComment(
			'Giftwrap item'
		);
		$installer->getConnection()->createTable($table);

		$table = $installer->getConnection()->newTable(
			$installer->getTable('excellence_giftwrapquote')
		)->addColumn(
			'giftwrap_id',
			\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			null,
			['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
			'Entity Id'
		)->addColumn(
			'quote_id',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			255,
			['nullable' => true],
			'Quote Id'
		)->addColumn(
			'giftwrap_items',
			\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			5555,
			['nullable' => true,'default' => null],
			'Gift wrap items'
		);

		$installer->getConnection()->createTable($table);
        
           $installer->getConnection()->addColumn(
            $installer->getTable('quote'),
            'gift_wrap_info',
            [
                'nullable' => false,
                'length' => 5120,
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'comment' => 'Gift Wrap Info',
            ]
        );

        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order'),
            'gift_wrap_info',
            [
                'nullable' => false,
                'length' => 5120,
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'comment' => 'Gift Wrap Info',
            ]
        );

        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order_grid'),
            'gift_wrap_info',
            [
                'nullable' => false,
                'length' => 5120,
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'comment' => 'Gift Wrap Info',
            ]
        );
        
		$installer->endSetup();
	}
}