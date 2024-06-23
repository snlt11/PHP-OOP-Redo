<?php
class Database
{
    private static $instance = null;
    private $connection;

    private function __construct()
    {
        $host = '127.0.0.1';
        $dbname = 'testing_db';
        $username = 'root';
        $password = '';
        try {
            $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    // Public method to access the database connection
    public function getConnection()
    {
        return $this->connection;
    }
}

$db1 = Database::getInstance();
$conn1 = $db1->getConnection();

$db2 = Database::getInstance();
$conn2 = $db2->getConnection();

// Both $db1 and $db2 are the same instance
var_dump($db1 === $db2);
// Outputs: bool(true)
var_dump($conn1 === $conn2);
// Outputs: bool(true)

$query = $conn1->query('SELECT * FROM users');
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    print_r($row);
}
