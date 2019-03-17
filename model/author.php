<?php
class Author{

    // Connection instance
    private $connection;

    // table name
    private $table_name = "author";


    public function __construct($connection){
        $this->connection = $connection;
    }

    //C
    public function create(){
    }

    //R
    public function read($author){
        $query = "SELECT  author_id , name, role, avatar, location, created_at, updated_at FROM " . $this->table_name . " WHERE author_id = '". $author ."'" ;

        $stmt = $this->connection->prepare($query);

        $stmt->execute();

        return $stmt;
    }
    //U
    public function update(){}
    //D
    public function delete(){}
}