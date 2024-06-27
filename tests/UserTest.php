<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../objects/Database.php';
require_once __DIR__ . '/../objects/User.php';

class UserTest extends TestCase {
    private $db;
    private $user;

    protected function setUp(): void {
        // Set up a database connection
        $database = new Database();
        $this->db = $database->getConnection();

        // Check if the connection is successful
        if ($this->db) {
            $this->user = new User($this->db);
        } else {
            $this->fail("Failed to connect to the database.");
        }
    }

    public function testCreateUser() {
        $this->user->name = "John Doe";
        $this->user->email = "john.doe@example.com";
        $this->assertTrue($this->user->create());
    }

    public function testReadUsers() {
        $stmt = $this->user->read();
        $this->assertNotEmpty($stmt->fetchAll(PDO::FETCH_ASSOC));
    }

    public function testUpdateUser() {
        $this->user->id = 1;
        $this->user->name = "Jane Doe";
        $this->user->email = "jane.doe@example.com";
        $this->assertTrue($this->user->update());
    }

    public function testDeleteUser() {
        $this->user->id = 1;
        $this->assertTrue($this->user->delete());
    }
}
