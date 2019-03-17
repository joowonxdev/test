<?php
header("Content-Type: application/json; charset=UTF-8");

include_once '../conf/dbclass.php';
include_once '../model/author.php';

$author_id = $_REQUEST['author'] ;

$dbclass = new DBClass();
$connection = $dbclass->getConnection();

$author = new Author($connection);
$stmt = $author->read($author_id);

$count = $stmt->rowCount();

if($count > 0){


    $author = array();
    $author["data"] = array();
    $author["count"] = $count;

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

        extract($row);

        $p  = array(
            "author_id" => $author_id,
            "name" => $name,
            "role" => $role,
            "avatar" => $avatar,
            "location" => $location,
            "created_at" => $created_at,
            "updated_at" => $updated_at,
        );

        array_push($author["data"], $p);
    }

    echo json_encode($author);
}

else {

    echo json_encode(
        array("data" => array(), "count" => 0)
    );
}
?>