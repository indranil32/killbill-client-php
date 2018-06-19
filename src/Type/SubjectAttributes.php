<?php

/*
 * Copyright 2011-2017 Ning, Inc.
 * Copyright 2014 Groupon, Inc.
 * Copyright 2014 The Billing Project, LLC
 *
 * The Billing Project licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace Killbill\Client\Type;

/*
 * DO NOT EDIT!!!
 * File automatically generated by killbill-java-parser (git@github.com:killbill/killbill-java-parser.git)
 */

/**
 * SubjectAttributes
 */
class SubjectAttributes extends \Killbill\Client\AbstractResource
{
    /** @var string|null */
    public $principal = null;
    /** @var bool|null */
    public $isAuthenticated = null;
    /** @var bool|null */
    public $isRemembered = null;
    /** @var SessionAttributes|null */
    public $session = null;

    /**
     * @param string|null $principal
     */
    public function setPrincipal($principal)
    {
        $this->principal = $principal;
    }

    /**
     * @return string|null
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * @param bool|null $isAuthenticated
     */
    public function setIsAuthenticated($isAuthenticated)
    {
        $this->isAuthenticated = $isAuthenticated;
    }

    /**
     * @return bool|null
     */
    public function getIsAuthenticated()
    {
        return $this->isAuthenticated;
    }

    /**
     * @param bool|null $isRemembered
     */
    public function setIsRemembered($isRemembered)
    {
        $this->isRemembered = $isRemembered;
    }

    /**
     * @return bool|null
     */
    public function getIsRemembered()
    {
        return $this->isRemembered;
    }

    /**
     * @param SessionAttributes|null $session
     */
    public function setSession($session)
    {
        $this->session = $session;
    }

    /**
     * @return SessionAttributes|null
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * @return string
     */
    public function getSessionType()
    {
        return SessionAttributes::class;
    }

}
