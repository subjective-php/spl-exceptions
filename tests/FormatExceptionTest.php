<?php

namespace SubjectivePHPTest\Spl\Exceptions;

use SubjectivePHP\Spl\Exceptions\FormatException;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \SubjectivePHPTest\Spl\Exceptions\FormatException
 */
final class FormatExceptionTest extends TestCase
{
    /**
     * @test
     */
    public function basicUsage()
    {
        $previous = new \RuntimeException();
        $exception = new FormatException('the message', 1, $previous);
        $this->assertSame('the message', $exception->getMessage());
        $this->assertSame(1, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());
        $this->assertInstanceOf(InvalidArgumentException::class, $exception);
    }
}
