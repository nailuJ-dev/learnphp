$host = "db.3wa.io";
$port = "3306";
$dbname = "prenomnom_phpj6";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "julianbuzare";
$password = "3fe0af2b79715c4ddd0f6d85ea1e2459";

$db = new PDO(
    $connexionString,
    $user,
    $password
);