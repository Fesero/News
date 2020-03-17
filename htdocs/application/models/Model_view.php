<?php
class Model_view extends Model {
    public function get_data($params)
    {
        try {
            $DBH = new PDO('mysql:host=localhost;dbname=test;charset=UTF8', 'Admin', '123456789');
            $STH = $DBH->prepare('SELECT id, title, content from news where id = :id');
            $STH->bindParam(':id', $params);
            $STH->execute();
            $STH->setFetchMode(PDO::FETCH_ASSOC);
            return $STH;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}