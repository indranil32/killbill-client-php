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
 * SubscriptionUsageRecordAttributes
 */
class SubscriptionUsageRecordAttributes extends \Killbill\Client\AbstractResource
{
    /** @var string|null */
    public $subscriptionId = null;
    /** @var string|null */
    public $trackingId = null;
    /** @var UnitUsageRecordAttributes[]|null */
    public $unitUsageRecords = null;

    /**
     * @param string|null $subscriptionId
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * @param string|null $trackingId
     */
    public function setTrackingId($trackingId)
    {
        $this->trackingId = $trackingId;
    }

    /**
     * @return string|null
     */
    public function getTrackingId()
    {
        return $this->trackingId;
    }

    /**
     * @param UnitUsageRecordAttributes[]|null $unitUsageRecords
     */
    public function setUnitUsageRecords($unitUsageRecords)
    {
        $this->unitUsageRecords = $unitUsageRecords;
    }

    /**
     * @return UnitUsageRecordAttributes[]|null
     */
    public function getUnitUsageRecords()
    {
        return $this->unitUsageRecords;
    }

    /**
     * @return string
     */
    public function getUnitUsageRecordsType()
    {
        return UnitUsageRecordAttributes::class;
    }

}
