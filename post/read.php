<?php
header("Content-Type: application/json; charset=UTF-8");

include_once '../conf/dbclass.php';
include_once '../model/post.php';

$dbclass = new DBClass();
$connection = $dbclass->getConnection();

$post = new Post($connection);
$stmt = $post->read();
$count = $stmt->rowCount();

if($count > 0){


    $posts = array();
    $posts["data"] = array();
    $posts["count"] = $count;

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

        extract($row);

        $p  = array(
            "post_id" => $post_id,
            "author_id" => $author_id,
            "title" => $title,
            "body" => $body,
            "tags" => $tags,
            "image_url" => $image_url,
            "created_at" => $created_at,
            "updated_at" => $updated_at,
        );

        array_push($posts["data"], $p);
    }

    echo json_encode($posts);
}

else {

    echo json_encode(
        array("data" => array(), "count" => 0)
    );
}
?>