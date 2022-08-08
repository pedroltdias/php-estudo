<?php

namespace Alura\Calisthenics\Tests\Unit\Domain\Video;

use Alura\Calisthenics\Domain\Video\Video;
use PHPUnit\Framework\TestCase;

class VideoTest extends TestCase
{
    public function testMakingAVideoPublicMustWork()
    {
        $video = new Video();
        $video->checkIfVisibilityIsValidAndUpdateIt(Video::PUBLIC);

        self::assertSame(Video::PUBLIC, $video->getVisibility());
    }
}
