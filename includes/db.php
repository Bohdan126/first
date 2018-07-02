<?php
$connection = mysqli_connect('localhost', 'root','root','first');


if($connection == false){
    echo 'Can not connect to database!<br>';
    echo mysqli_connect_error();
    exit();
}
/*$dbh = new PDO('mysql:host=localhost;dbname=first', root, root);

try {
    $dbh = new PDO('mysql:host=localhost;dbname=first', root, root);
    foreach($dbh->query('SELECT * from FIRST ') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}*/
?>
