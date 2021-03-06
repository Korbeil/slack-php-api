<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class TeamIntegrationLogsGetResponse200LogsItem
{
    /**
     * @var string
     */
    protected $adminAppId;
    /**
     * @var string
     */
    protected $appId;
    /**
     * @var string
     */
    protected $appType;
    /**
     * @var string
     */
    protected $changeType;
    /**
     * @var string
     */
    protected $channel;
    /**
     * @var string
     */
    protected $date;
    /**
     * @var string
     */
    protected $scope;
    /**
     * @var string
     */
    protected $serviceId;
    /**
     * @var string
     */
    protected $serviceType;
    /**
     * @var string
     */
    protected $userId;
    /**
     * @var string
     */
    protected $userName;

    /**
     * @return string|null
     */
    public function getAdminAppId(): ?string
    {
        return $this->adminAppId;
    }

    /**
     * @param string|null $adminAppId
     *
     * @return self
     */
    public function setAdminAppId(?string $adminAppId): self
    {
        $this->adminAppId = $adminAppId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * @param string|null $appId
     *
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAppType(): ?string
    {
        return $this->appType;
    }

    /**
     * @param string|null $appType
     *
     * @return self
     */
    public function setAppType(?string $appType): self
    {
        $this->appType = $appType;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getChangeType(): ?string
    {
        return $this->changeType;
    }

    /**
     * @param string|null $changeType
     *
     * @return self
     */
    public function setChangeType(?string $changeType): self
    {
        $this->changeType = $changeType;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }

    /**
     * @param string|null $channel
     *
     * @return self
     */
    public function setChannel(?string $channel): self
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param string|null $date
     *
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }

    /**
     * @param string|null $scope
     *
     * @return self
     */
    public function setScope(?string $scope): self
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getServiceId(): ?string
    {
        return $this->serviceId;
    }

    /**
     * @param string|null $serviceId
     *
     * @return self
     */
    public function setServiceId(?string $serviceId): self
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getServiceType(): ?string
    {
        return $this->serviceType;
    }

    /**
     * @param string|null $serviceType
     *
     * @return self
     */
    public function setServiceType(?string $serviceType): self
    {
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * @param string|null $userName
     *
     * @return self
     */
    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }
}
