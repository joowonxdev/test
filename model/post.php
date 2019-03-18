<?php
class Post{

    // Connection instance
    private $connection;

    // table name
    private $table_name = "Post";



    public function __construct($connection){

        $this->connection = $connection;
    }

    //C
    public function create(){
    }
    //R
    public function read(){
        $query = "SELECT  post_id , author_id, title, body, tags, image_url, created_at, updated_at FROM " . $this->table_name . "  ORDER BY created_at DESC";

        $stmt = $this->connection->prepare($query);

        $stmt->execute();
        return $stmt;
    }

    //U
    public function update(){}
    //D
    public function delete(){}
}