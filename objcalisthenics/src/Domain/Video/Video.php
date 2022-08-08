<?php

namespace Alura\Calisthenics\Domain\Video;

class Video
{
    public const PUBLIC = 1;
    public const PRIVATE = 2;

    private int $visibility = self::PRIVATE;
    private int $ageLimit;

    public function publish()
    {
        $this->visibility = self::PUBLIC;
    }

    public function getVisibility(): int
    {
        return $this->visibility;
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
