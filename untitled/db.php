<?php
final class DB
{
    private $link;
    public function __construct($hostName, $port, $username, $password, $database)
    {
        $this->link = new mysqli($hostName, $username, $password, $database, $port);

        if ($this->link->connect_error) {
            trigger_error('Error: Could not make a database link (' . $this->link->connect_errno . ')' . $this->link->connect_error);
        }

        $this->link->set_charset("utf8mb4");
        $this->link->query("SET SQL_MODE = ''");
    }
    public function query($sql){
        $query = $this->link->query($sql);
        if(!$this->link->errno){
            if($query instanceof mysqli_result){
                $data = [];
                while($row = $query->fetch_assoc()){
                    $data[] = $row;
                }
                $result = new stdClass();
                $result->numrows = $query->num_rows;
                $result->row = $data ? $data[0] : [];
                $result->rows = $data;
                $query->close();
                return $result;
            }
            else{
                trigger_error('Error' . $this->link->error . '<br/>Error No:'.$this->link->errno.'<br/>'.$sql);
            }
        }
    }
}