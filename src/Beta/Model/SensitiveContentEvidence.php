<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SensitiveContentEvidence File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* SensitiveContentEvidence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SensitiveContentEvidence extends Entity
{
    /**
    * Gets the match
    *
    * @return string The match
    */
    public function getMatch()
    {
        if (array_key_exists("match", $this->_propDict)) {
            return $this->_propDict["match"];
        } else {
            return null;
        }
    }

    /**
    * Sets the match
    *
    * @param string $val The value of the match
    *
    * @return SensitiveContentEvidence
    */
    public function setMatch($val)
    {
        $this->_propDict["match"] = $val;
        return $this;
    }
    /**
    * Gets the offset
    *
    * @return int The offset
    */
    public function getOffset()
    {
        if (array_key_exists("offset", $this->_propDict)) {
            return $this->_propDict["offset"];
        } else {
            return null;
        }
    }

    /**
    * Sets the offset
    *
    * @param int $val The value of the offset
    *
    * @return SensitiveContentEvidence
    */
    public function setOffset($val)
    {
        $this->_propDict["offset"] = $val;
        return $this;
    }
    /**
    * Gets the length
    *
    * @return int The length
    */
    public function getLength()
    {
        if (array_key_exists("length", $this->_propDict)) {
            return $this->_propDict["length"];
        } else {
            return null;
        }
    }

    /**
    * Sets the length
    *
    * @param int $val The value of the length
    *
    * @return SensitiveContentEvidence
    */
    public function setLength($val)
    {
        $this->_propDict["length"] = $val;
        return $this;
    }
}