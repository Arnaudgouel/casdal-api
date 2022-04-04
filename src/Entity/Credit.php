<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Credit
 *
 * @ORM\Table(name="credit", uniqueConstraints={@ORM\UniqueConstraint(name="credit_reference_key", columns={"reference"})}, indexes={@ORM\Index(name="IDX_1CC16EFEA76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class Credit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="credit_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=50, nullable=false)
     */
    private $reference;

    /**
     * @var int
     *
     * @ORM\Column(name="amount_price", type="integer", nullable=false)
     */
    private $amountPrice;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expiry", type="date", nullable=true)
     */
    private $expiry;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="now()"})
     */
    private $createdAt = 'now()';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="deactivated_at", type="datetime", nullable=true)
     */
    private $deactivatedAt;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getAmountPrice(): ?int
    {
        return $this->amountPrice;
    }

    public function setAmountPrice(int $amountPrice): self
    {
        $this->amountPrice = $amountPrice;

        return $this;
    }

    public function getExpiry(): ?\DateTimeInterface
    {
        return $this->expiry;
    }

    public function setExpiry(?\DateTimeInterface $expiry): self
    {
        $this->expiry = $expiry;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getDeactivatedAt(): ?\DateTimeInterface
    {
        return $this->deactivatedAt;
    }

    public function setDeactivatedAt(?\DateTimeInterface $deactivatedAt): self
    {
        $this->deactivatedAt = $deactivatedAt;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


}
