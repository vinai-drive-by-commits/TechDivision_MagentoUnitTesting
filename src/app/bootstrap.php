<?php
/**
 * Magento Enterprise Edition
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento Enterprise Edition License
 * that is bundled with this package in the file LICENSE_EE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.magentocommerce.com/license/enterprise-edition
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage
 * @copyright   Copyright (c) 2011 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://www.magentocommerce.com/license/enterprise-edition
 */

if (version_compare(phpversion(), '5.2.0', '<')===true) {
    echo  '<div style="font:12px/1.35em arial, helvetica, sans-serif;"><div style="margin:0 0 25px 0; border-bottom:1px solid #ccc;"><h3 style="margin:0; font-size:1.7em; font-weight:normal; text-transform:none; text-align:left; color:#2f2f2f;">Whoops, it looks like you have an invalid PHP version.</h3></div><p>Magento supports PHP 5.2.0 or newer. <a href="http://www.magentocommerce.com/install" target="">Find out</a> how to install</a> Magento using PHP-CGI as a work-around.</p></div>';
    exit;
}

/**
 * Environment initialization
 */
error_reporting(E_ALL & ~E_NOTICE | E_STRICT);
#ini_set('display_errors', 1);
umask(0);

/**
 * Constants definition
 */
define('DS', DIRECTORY_SEPARATOR);
define('BP', dirname(__DIR__));

/**
 * Require necessary files
 */
require_once BP . '/app/code/core/Mage/Core/functions.php';
require_once BP . '/app/Mage.php';
require_once BP . '/app/autoload.php';