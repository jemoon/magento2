<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Directory Resource Setup Model
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
namespace Magento\Directory\Model\Resource;

use Magento\Framework\Setup\ModuleDataResourceInterface;

class Setup extends \Magento\Setup\Module\DataSetup
{
    /**
     * @var \Magento\Directory\Helper\Data
     */
    protected $_directoryData;

    /**
     * @param \Magento\Framework\Module\Setup\Context $context
     * @param string $resourceName
     * @param \Magento\Directory\Helper\Data $directoryData
     * @param string $moduleName
     * @param string $connectionName
     */
    public function __construct(
        \Magento\Framework\Module\Setup\Context $context,
        $resourceName,
        \Magento\Directory\Helper\Data $directoryData,
        $moduleName = 'Magento_Directory',
        $connectionName = ModuleDataResourceInterface::DEFAULT_SETUP_CONNECTION
    ) {
        $this->_directoryData = $directoryData;
        parent::__construct($context, $resourceName, $moduleName, $connectionName);
    }

    /**
     * @return \Magento\Directory\Helper\Data
     */
    public function getDirectoryData()
    {
        return $this->_directoryData;
    }
}
