<?php
class Task
{
    public $id;
    public $text;
    
    public function add ($text)
    {
        $db = new Database();
        $sql = "INSERT INTO tasks (text) values (:text)";
        $array = [
            ':text' => $text,
        ];
        $db -> execute($sql, $array);
    }

    public function del ($id)
    {
        $db = new Database();
        $sql = "DELETE FROM tasks WHERE id = :id";
        $array = [
            ':id' => $id,
        ];
        $db -> execute($sql, $array);
    }

    public function finish ($id)
    {
        $db = new Database();
        $sql = "UPDATE tasks SET finished = '1' WHERE id = :id";
        $array = [
            ':id' => $id,
        ];
        $db -> execute($sql, $array);
    }

    public static function getTasks ()
    {
        $db = new Database();
        $sql = "SELECT * FROM tasks";
        $array = [
        ];
        $res = $db -> query($sql, $array);
        return $res;
    }
}