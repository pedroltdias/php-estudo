<?php

namespace Alura\Calisthenics\Tests\Unit\Domain\Video;

use Alura\Calisthenics\Domain\Student\Student;
use Alura\Calisthenics\Domain\Video\InMemoryVideoRepository;
use Alura\Calisthenics\Domain\Video\Video;
use PHPUnit\Framework\TestCase;

class InMemoryVideoRepositoryTest extends TestCase
{
    public function testFindingVideosForAStudentMustFilterAgeLimit()
    {
        $repository = new InMemoryVideoRepository();

        // [21, 20, 19, 18, 17]
        for ($i = 21; $i >= 17; $i--) {
            $video = new Video();
            $video->setAgeLimit($i);
            $repository->add($video);
        }

        $student = $this->createStub(Student::class);
        $student->method('getBd')->willReturn(new \DateTimeImmutable('-19 years'));

        $videoList = $repository->videosFor($student);

        self::assertCount(3, $videoList);
    }
}
