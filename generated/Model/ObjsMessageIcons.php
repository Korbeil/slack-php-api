<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsMessageIcons
{
    /**
     * @var string
     */
    protected $emoji;

    /**
     * @return string|null
     */
    public function getEmoji(): ?string
    {
        return $this->emoji;
    }

    /**
     * @param string|null $emoji
     *
     * @return self
     */
    public function setEmoji(?string $emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }
}
