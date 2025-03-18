<?php

class Products {
    //db connect
    private $connection;
    private $table = "products";

    //constructor with db connection
    public function _construct($db) {
        $this->connection = $db;

        //get non-member books
        public function getRegualarBooks() {
            $sql = "SELECTION * FROM " . $this->table . "WHERE member_only = 0";

            $statement = $this->connection->prepare($sql);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        //get member book
        public function getMemberBooks() {
            $sql ="SELECTION * FROM " . $this->table . "WHERE member_only =1 ";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}
?>