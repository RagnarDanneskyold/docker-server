<?
echo 'Docker Test' . PHP_EOL;
//phpinfo();
//$hostname берется из имени контейнера мускулов
$conn = mysqli_connect('mysql', 'root', 'root');
//try { $dbConn = new PDO(
//    'mysql:host=mysql;',
//    'root',
//    'mighty');
//} catch (Exception $e) {
//    $e->getMessage() ;
//}
//$conn->query('CREATE DATABASE `test-docker1`');
//$conn->query('show databases');

echo '<pre>';
var_dump($conn->get_server_info());
?>