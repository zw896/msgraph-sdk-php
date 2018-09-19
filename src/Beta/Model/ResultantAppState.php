<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResultantAppState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* ResultantAppState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ResultantAppState extends Enum
{
    /**
    * The Enum ResultantAppState
    */
    const INSTALLED = "installed";
    const FAILED = "failed";
    const NOT_INSTALLED = "notInstalled";
    const UNINSTALL_FAILED = "uninstallFailed";
    const PENDING_INSTALL = "pendingInstall";
    const UNKNOWN = "unknown";
    const NOT_APPLICABLE = "notApplicable";
}