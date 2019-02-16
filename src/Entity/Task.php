<?php

declare(strict_types=1);

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Task
{
    /**
     * @var string
     * @Assert\NotBlank
     */
    protected $task = '';

    /**
     * @var \DateTime|null
     * @Assert\Type("\DateTime")
     */
    protected $dueDate = null;

    public function getTask(): string
    {
        return $this->task;
    }

    public function setTask(string $task): void
    {
        $this->task = $task;
    }

    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    public function setDueDate(?\DateTime $dueDate = null): void
    {
        $this->dueDate = $dueDate;
    }
}