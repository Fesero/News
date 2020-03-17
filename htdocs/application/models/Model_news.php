<?php
class Model_news extends Model {
    public function get_data($params = null)
    {
        try {
            $DBH = new PDO('mysql:host=localhost;dbname=test;charset=UTF8', 'Admin', '123456789');
            $STH = $DBH->prepare('SELECT id, idate, title, announce FROM news ORDER BY idate DESC');
            $STH->execute();
            $STH->setFetchMode(PDO::FETCH_ASSOC);
            return $STH;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}