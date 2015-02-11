<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Dhl\Model\Resource;

use Magento\Framework\Setup\ModuleDataResourceInterface;

class Setup extends \Magento\Setup\Module\DataSetup
{
    /**
     * @var \Magento\Framework\Locale\ListsInterface
     */
    protected $_localeLists;

    /**
     * @param \Magento\Framework\Module\Setup\Context $context
     * @param string $resourceName
     * @param string $moduleName
     * @param \Magento\Framework\Locale\ListsInterface $localeLists
     * @param string $connectionName
     */
    public function __construct(
        \Magento\Framework\Module\Setup\Context $context,
        $resourceName,
        $moduleName,
        \Magento\Framework\Locale\ListsInterface $localeLists,
        $connectionName = ModuleDataResourceInterface::DEFAULT_SETUP_CONNECTION
    ) {
        $this->_localeLists = $localeLists;
        parent::__construct($context, $resourceName, $moduleName, $connectionName);
    }

    /**
     * @return \Magento\Framework\Locale\ListsInterface
     */
    public function getLocaleLists()
    {
        return $this->_localeLists;
    }
}
