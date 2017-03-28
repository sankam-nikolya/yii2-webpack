<?php
/**
 * maintenance.php
 *
 * PHP version 5.6+
 *
 * @author Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2017 Sweelix
 * @license http://www.sweelix.net/license license
 * @version 1.3.1
 * @link http://www.sweelix.net
 * @package application\base
 */

$allowedIp = [
];
$result = null;
if ((YII_MAINTENANCE === true) && (in_array($_SERVER['REMOTE_ADDR'], $allowedIp) === false)) {
    $result = ['site/maintenance'];
}

return $result;
