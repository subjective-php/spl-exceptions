<?php

namespace SubjectivePHPTest\Spl\Exceptions;

use SubjectivePHP\Spl\Exceptions\NotAllowedException;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * @coversDefaultClass \SubjectivePHPTest\Spl\Exceptions\NotAllowedException
 */
final class NotAllowedExceptionTest extends TestCase
{
    /**
     * @test
     */
    public function basicUsage()
    {
        $previous = new \RuntimeException();
        $exception = new NotAllowedException('the message', 1, $previous);
        $this->assertSame('the message', $exception->getMessage());
        $this->assertSame(1, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());
        $this->assertInstanceOf(RuntimeException::class, $exception);
    }
}
