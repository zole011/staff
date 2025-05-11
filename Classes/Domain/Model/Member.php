<?php
namespace Gmbit\Staff\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Core\Resource\FileReference;

class Member extends AbstractEntity
{
    protected string $firstName = '';
    protected string $lastName = '';
    protected string $title = '';
    protected string $position = '';
    protected ?FileReference $image = null;
    protected string $description = '';
    protected string $slug = '';

// Getters and setters ...

public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    public function getPosition(): string
    {
        return $this->position;
    }
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }
    public function getImage(): ?FileReference
    {
        return $this->image;
    }
    public function setImage(?FileReference $image): void
    {
        $this->image = $image;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    public function getSlug(): string
    {
        return $this->slug;
    }
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }
}