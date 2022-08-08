<?php

namespace Alura\Calisthenics\Domain\Video;

class Video
{
    private const PUBLIC = 1;
    private const PRIVATE = 2;

    private int $visibility = self::PRIVATE;
    private int $ageLimit;

    public function publish(): void
    {
        $this->visibility = self::PUBLIC;
    }

    public function isPublic(): bool
    {
        return $this->visibility === self::PUBLIC;
    }

    public function checkIfVisibilityIsValidAndUpdateIt(int $visibility): void
    {
        if (in_array($visibility, [self::PUBLIC, self::PRIVATE])) {
            $this->visibility = $visibility;
        } else {
            throw new \InvalidArgumentException('Invalid visibility');
        }
    }

    public function getAgeLimit(): int
    {
        return $this->ageLimit;
    }

    public function setAgeLimit(int $ageLimit): void
    {
        $this->ageLimit = $ageLimit;
    }
}
