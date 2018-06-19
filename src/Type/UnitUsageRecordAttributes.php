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
 * UnitUsageRecordAttributes
 */
class UnitUsageRecordAttributes extends \Killbill\Client\AbstractResource
{
    /** @var string|null */
    public $unitType = null;
    /** @var UsageRecordAttributes[]|null */
    public $usageRecords = null;

    /**
     * @param string|null $unitType
     */
    public function setUnitType($unitType)
    {
        $this->unitType = $unitType;
    }

    /**
     * @return string|null
     */
    public function getUnitType()
    {
        return $this->unitType;
    }

    /**
     * @param UsageRecordAttributes[]|null $usageRecords
     */
    public function setUsageRecords($usageRecords)
    {
        $this->usageRecords = $usageRecords;
    }

    /**
     * @return UsageRecordAttributes[]|null
     */
    public function getUsageRecords()
    {
        return $this->usageRecords;
    }

    /**
     * @return string
     */
    public function getUsageRecordsType()
    {
        return UsageRecordAttributes::class;
    }

}
