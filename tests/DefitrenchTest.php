<?php
/**
 * Tests for DefiTrench
 */

use PHPUnit\Framework\TestCase;
use Defitrench\Defitrench;

class DefitrenchTest extends TestCase {
    private Defitrench $instance;

    protected function setUp(): void {
        $this->instance = new Defitrench(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defitrench::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
