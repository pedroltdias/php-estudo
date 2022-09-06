<?php

namespace Alura\Calisthenics\Domain\Video;

use Alura\Calisthenics\Domain\Student\Student;

class InMemoryVideoRepository implements VideoRepository
{
    private array $videos;

    public function add(Video $video): void
    {
        $this->videos[] = $video;
    }

    public function videosFor(Student $student): array
    {
        $today = new \DateTimeImmutable();
        return array_filter($this->videos, fn (Video $video) => $video->getAgeLimit() <= $student->getBd()->diff($today)->y);
    }
}
