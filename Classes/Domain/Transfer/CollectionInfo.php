<?php

namespace TN\Typoniels\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/**
 * Class Question
 *
 * @package TN\Typoniels\Domain\Model
 */
class Repository extends AbstractEntity
{
    /**
     * @var int
     */
    protected $reproId = 0;

    /**
     * title
     *
     * @var string
     */
    protected $reproName = '';

    /**
     * title
     *
     * @var string
     */
    protected $reproDescription = '';

    /**
     * title
     *
     * @var string
     */
    protected $reproWebUrl = '';

    /**
     * title
     *
     * @var string
     */
    protected $reproTagList = '';

    /**
     * title
     *
     * @var string
     */
    protected $reproAvatarUrl = '';

    /**
     * title
     *
     * @var string
     */
    protected $reproLastActivityAt = '';

    /**
     * title
     *
     * @var string
     */
    protected $description = '';


    /**
     * media
     *
     * @var \TN\Typoniels\Domain\Model\FileReference|null
     */
    protected $media = null;

    /**
     * @return int
     */
    public function getReproId(): int
    {
        return $this->reproId;
    }

    /**
     * @param int $reproId
     */
    public function setReproId(int $reproId): void
    {
        $this->reproId = $reproId;
    }

    /**
     * @return string
     */
    public function getReproName(): string
    {
        return $this->reproName;
    }

    /**
     * @param string $reproName
     */
    public function setReproName(string $reproName): void
    {
        $this->reproName = $reproName;
    }

    /**
     * @return string
     */
    public function getReproDescription(): string
    {
        return $this->reproDescription;
    }

    /**
     * @param string $reproDescription
     */
    public function setReproDescription(string $reproDescription): void
    {
        $this->reproDescription = $reproDescription;
    }

    /**
     * @return string
     */
    public function getReproWebUrl(): string
    {
        return $this->reproWebUrl;
    }

    /**
     * @param string $reproWebUrl
     */
    public function setReproWebUrl(string $reproWebUrl): void
    {
        $this->reproWebUrl = $reproWebUrl;
    }

    /**
     * @return string
     */
    public function getReproTagList(): string
    {
        return $this->reproTagList;
    }

    /**
     * @param string $reproTagList
     */
    public function setReproTagList(string $reproTagList): void
    {
        $this->reproTagList = $reproTagList;
    }

    /**
     * @return string
     */
    public function getReproAvatarUrl(): string
    {
        return $this->reproAvatarUrl;
    }

    /**
     * @param string $reproAvatarUrl
     */
    public function setReproAvatarUrl(string $reproAvatarUrl): void
    {
        $this->reproAvatarUrl = $reproAvatarUrl;
    }

    /**
     * @return string
     */
    public function getReproLastActivityAt(): string
    {
        return $this->reproLastActivityAt;
    }

    /**
     * @param string $reproLastActivityAt
     */
    public function setReproLastActivityAt(string $reproLastActivityAt): void
    {
        $this->reproLastActivityAt = $reproLastActivityAt;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return null|FileReference
     */
    public function getMedia(): ?FileReference
    {
        return $this->media;
    }

    /**
     * @param null|FileReference $media
     */
    public function setMedia(?FileReference $media): void
    {
        $this->media = $media;
    }

}
