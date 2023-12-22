
<?php
require_once '../config/conn.php'; 
define('host', 'localhost');
define('database', 'quiz');

define('user', 'root');

define('password', '');



try {
    $db = Database::getInstance();
    $connection = $db->getConnection();
    echo "Connection successful!";
 } catch (PDOException $e) {
    echo  $e->getMessage();
    echo "Connection failed: " . $e->getMessage();
    return null;
} 


?>




























<!-- ?php /* 
class Database
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "opep2";


    public function conn()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->database}";

        try {
            $db = new PDO($dsn, $this->user, $this->password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connection successful!";
            return $db;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
    
    
}
$test = new Database();
$test->conn();
-- >
*/