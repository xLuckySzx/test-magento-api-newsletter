<?php
/**
 * Copyright © Lucky All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lucky\NewsletterApi\Api;

interface SubscriberManagementInterface
{

    /**
     * POST for Subscriber api
     * @param \Lucky\NewsletterApi\Api\Data\SubscriberInterface $subscriber
     * @return \Lucky\NewsletterApi\Api\Data\SubscriberInterface
     */
    public function postSubscriber($subscriber);

    /**
     * @param int $id
     * @param string $confirmationCode
     * @return \Lucky\NewsletterApi\Api\Data\SubscriberInterface
     */
    public function postUnsubscribe($id,$confirmationCode);

    /**
     * @param int $id
     * @param string $confirmationCode
     * @return \Lucky\NewsletterApi\Api\Data\SubscriberInterface
     */
    public function postConfirm($id,$confirmationCode);

    /**
     * Retrieve pages matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Lucky\NewsletterApi\Api\Data\SubscribersSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Delete subscriber by id.
     *
     * @param int $subscriberId
     * @return mixed
     */
    public function deleteSubscriber($subscriberId);
}


