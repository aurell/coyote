<?php

namespace Coyote\Repositories\Contracts;

interface StreamRepositoryInterface extends RepositoryInterface
{
    /**
     * @param int[] $forumIds
     * @return mixed
     */
    public function forumFeeds(array $forumIds);

    /**
     * @param int $topicId
     * @return mixed
     */
    public function takeForTopic($topicId);

    /**
     * @param int $userId
     * @param string $ip
     * @param string $browser
     * @return bool
     */
    public function hasLoggedBefore($userId, $ip, $browser);
}
