<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../index.php';

class DatabaseTest extends TestCase {
    private $database;

    protected function setUp(): void {
        $this->database = new Database();
    }

    public function testGetConnection() {
        $conn = $this->database->getConnection();
        $this->assertInstanceOf(PDO::class, $conn);
    }
}
