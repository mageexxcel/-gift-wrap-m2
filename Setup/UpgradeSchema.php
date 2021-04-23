<?php

namespace Excellence\GiftWrap\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * Upgrades DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $quoteAddressTable = 'quote_address';
        $quoteTable = 'quote';
        $orderTable = 'sales_order';
        $invoiceTable = 'sales_invoice';
        $creditmemoTable = 'sales_creditmemo';

        //Setup two columns for quote, quote_address and order
        //Quote address tables
        $setup->getConnection()
            ->addColumn(
                $setup->getTable($quoteTable),
                'giftwrap_amount',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    '10,2',
                    'default' => Null,
                    'nullable' => true,
                    'comment' =>'Giftwrap Amount'
                ]
            );
        $setup->getConnection()
            ->addColumn(
                $setup->getTable($quoteTable),
                'base_giftwrap_amount',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    '10,2',
                    'default' => Null,
                    'nullable' => true,
                    'comment' =>'Base Giftwrap Amount'
                ]
            );
        $setup->getConnection()
            ->addColumn(
                $setup->getTable($quoteAddressTable),
                'giftwrap_amount',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    '10,2',
                    'default' => Null,
                    'nullable' => true,
                    'comment' =>'Giftwrap Amount'
                ]
            );
        $setup->getConnection()
            ->addColumn(
                $setup->getTable($quoteAddressTable),
                'base_giftwrap_amount',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    '10,2',
                    'default' => Null,
                    'nullable' => true,
                    'comment' =>'Base Giftwrap Amount'
                ]
            );
        //Order tables
        $setup->getConnection()
            ->addColumn(
                $setup->getTable($orderTable),
                'giftwrap_amount',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    '10,2',
                    'default' => Null,
                    'nullable' => true,
                    'comment' =>'Giftwrap Amount'

                ]
            );

        $setup->getConnection()
            ->addColumn(
                $setup->getTable($orderTable),
                'base_giftwrap_amount',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    '10,2',
                    'default' => Null,
                    'nullable' => true,
                    'comment' =>'Base Giftwrap Amount'

                ]
            );

        $setup->getConnection()
            ->addColumn(
                $setup->getTable($orderTable),
                'giftwrap_amount_refunded',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    '10,2',
                    'default' => Null,
                    'nullable' => true,
                    'comment' =>'Base Giftwrap Amount Refunded'
                ]
            );
        $setup->getConnection()
            ->addColumn(
                $setup->getTable($orderTable),
                'base_giftwrap_amount_refunded',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    '10,2',
                    'default' => Null,
                    'nullable' => true,
                    'comment' =>'Base Giftwrap Amount Refunded'
                ]
            );
       
         
            // invoice table
        $setup->getConnection()
            ->addColumn(
                $setup->getTable($orderTable),
                'giftwrap_amount_invoiced',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    '10,2',
                    'default' => Null,
                    'nullable' => true,
                    'comment' =>'Giftwrap Amount Invoiced'
                ]
            );
        $setup->getConnection()
            ->addColumn(
                $setup->getTable($orderTable),
                'base_giftwrap_amount_invoiced',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    '10,2',
                    'default' => Null,
                    'nullable' => true,
                    'comment' =>'Base Giftwrap Amount Invoiced'
                ]
            );
        
        //Invoice tables
        $setup->getConnection()
            ->addColumn(
                $setup->getTable($invoiceTable),
                'giftwrap_amount',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    '10,2',
                    'default' => Null,
                    'nullable' => true,
                    'comment' =>'Giftwrap Amount'

                ]
            );
        $setup->getConnection()
            ->addColumn(
                $setup->getTable($invoiceTable),
                'base_giftwrap_amount',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    '10,2',
                    'default' => Null,
                    'nullable' => true,
                    'comment' =>'Base Giftwrap Amount'

                ]
            );
        //Credit memo tables
        $setup->getConnection()
            ->addColumn(
                $setup->getTable($creditmemoTable),
                'giftwrap_amount',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    '10,2',
                    'default' => Null,
                    'nullable' => true,
                    'comment' =>'Giftwrap Amount'

                ]
            );
        $setup->getConnection()
            ->addColumn(
                $setup->getTable($creditmemoTable),
                'base_giftwrap_amount',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    '10,2',
                    'default' =>Null,
                    'nullable' => true,
                    'comment' =>'Base Giftwrap Amount'

                ]
            );
 
        $setup->endSetup();
    }
}