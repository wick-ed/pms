<?php

/**
 * AppserverIo\Psr\Pms\PriorityKey
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage Pms
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/pms
 * @link       http://www.appserver.io
 */

namespace AppserverIo\Psr\Pms;

/**
 * Interface for all priority keys used as message priority.
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage Pms
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/pms
 * @link       http://www.appserver.io
 */
interface PriorityKey
{

    /**
     * Returns the key value of the priority key instance.
     *
     * @return integer The key value
     */
    public function getPriority();
}
