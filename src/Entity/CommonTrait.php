<?php
// src/Entity/CommonTrait.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

trait CommonTrait
{
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $createdBy;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $updatedBy;

    /**
     * Pre persist event listener
     * 
     * @ORM\PrePersist
     */
    public function beforeSave()
    {
        $this->createdAt = new \DateTime('now', new \DateTimeZone('UTC'));
        $this->updatedAt = new \DateTime('now', new \DateTimeZone('UTC'));
        // You need to set createdBy and updatedBy based on your authentication system
        $this->createdBy = 'your_user_id';
        $this->updatedBy = 'your_user_id';
    }

    /**
     * Pre update event listener
     * 
     * @ORM\PreUpdate
     */
    public function beforeUpdate()
    {
        $this->updatedAt = new \DateTime('now', new \DatetimeZone('UTC'));
        // You need to set updatedBy based on your authentication system
        $this->updatedBy = 'your_user_id';
    }

    /**
     * Soft delete method
     */
    public function softDelete()
    {
        $this->deletedAt = new \DateTime('now', new \DatetimeZone('UTC'));
        // You need to set updatedBy based on your authentication system
        $this->updatedBy = 'your_user_id';
    }

    /**
     * Check if entity is deleted
     */
    public function isDeleted()
    {
        return $this->deletedAt !== null;
    }
}
