<?php

namespace SubjectivePHPTest\Spl\Exceptions;

use SubjectivePHP\Spl\Exceptions\TimeoutException;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * @coversDefaultClass \SubjectivePHPTest\Spl\Exceptions\TimeoutException
 */
final class TimeoutExceptionTest extends TestCase
{
    /**
     * @test
     */
    public function basicUsage()
    {
        $previous = new \RuntimeException();
        $exception = new TimeoutException('the message', 1, $previous);
        $this->assertSame('the message', $exception->getMessage());
        $this->assertSame(1, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());
        $this->assertInstanceOf(RuntimeException::class, $exception);
    }
}
