<?php
class database{
    public $server="localhost";
    public $user="root";
    public $pass="";
    public $db="db_siswa";
    public $table="tb_siswa";
    public $conn;
    public $data=[];
    public $db_value;
    public $field;
    public function __construct(){
        $this->conn = mysqli_connect($this->server,$this->user,$this->pass,$this->db);
   
    }
    public function save(){
		$bd=count($this->data);
			if ($bd===2) {
		 	$this->db_value= "'".$this->data[0]."','".$this->data[1]."'";
		}elseif ($bd===3) {
			$this->db_value="'".$this->data[0]."','".$this->data[1]."','".$this->data[2]."'";
		}elseif ($bd===4) {
			$this->db_value="'".$this->data[0]."','".$this->data[1]."','".$this->data[2]."','".$this->data[3]."'";
		}elseif ($bd===5) {
			$this->db_value="'".$this->data[0]."','".$this->data[1]."','".$this->data[2]."','".$this->data[3]."','".$this->data[4]."'";
		}elseif ($bd===6) {
			$this->db_value="'".$this->data[0]."','".$this->data[1]."','".$this->data[2]."','".$this->data[3]."','".$this->data[4]."','".$this->data[5]."'";
		}elseif ($bd===7) {
			$this->db_value="'".$this->data[0]."','".$this->data[1]."','".$this->data[2]."','".$this->data[3]."','".$this->data[4]."','".$this->data[5]."','".$this->data[6]."'";
		}
		echo $this->db_value;
		$query=	"INSERT INTO $this->table values (".$this->db_value.")";
 
	mysqli_query($this->conn,$query);
	return mysqli_affected_rows($this->conn);
}
    
public function getdata(){
    $query="select*from $this->table";
    $result = mysqli_query($this->conn,$query);
    $rows=[];
    while ($row= mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return$rows;
}

public function delete($id){
    mysqli_query($this->conn,"DELETE FROM $this->table where ". $this->field[0]."='$id'");
    return mysqli_affected_rows($this->conn);
}
public function getdatasingle($id){
     $query = "select*from $this->table where ". $this->field[0]."='$id'";
     $result = mysqli_query($this->conn,$query);
     $rows = mysqli_fetch_assoc($result);
     return $rows;
}

public function getdatauser($username){
    $query = "select*from $this->table where ". $this->field[1]."='$username'";
    $result = mysqli_query($this->conn,$query);
    $rows = mysqli_fetch_assoc($result);
    return $rows;
}

public function update (){
    $bd=count($this->data);
    if ($bd===2) {
    $this->db_value=$this->field[0]."='".$this->data[0]."',".$this->field[1]."='".$this->data[1]."'";
}elseif ($bd===3) {
    $this->db_value=$this->field[0]."='".$this->data[0]."',".$this->field[1]."='".$this->data[1]."',".$this->field[2]."='".$this->data[2]."'";
}elseif ($bd===4) {
    $this->db_value=$this->field[0]."='".$this->data[0]."',".$this->field[1]."='".$this->data[1]."',".$this->field[2]."='".$this->data[2]."',".$this->field[3]."='".$this->data[3]."'";
}elseif ($bd===5) {
    $this->db_value=$this->field[0]."='".$this->data[0]."',".$this->field[1]."='".$this->data[1]."',".$this->field[2]."='".$this->data[2]."',".$this->field[3]."='".$this->data[3]."',".$this->field[4]."='".$this->data[4]."'";
}elseif ($bd===6) {
    $this->db_value=$this->field[0]."='".$this->data[0]."',".$this->field[1]."='".$this->data[1]."',".$this->field[2]."='".$this->data[2]."',".$this->field[3]."='".$this->data[3]."',".$this->field[4]."='".$this->data[4]."',".$this->field[5]."='".$this->data[5]."'";
}elseif ($bd===7) {
    $this->db_value=$this->field[0]."='".$this->data[0]."',".$this->field[1]."='".$this->data[1]."',".$this->field[2]."='".$this->data[2]."',".$this->field[3]."='".$this->data[3]."',".$this->field[4]."='".$this->data[4]."',".$this->field[5]."='".$this->data[5]."',".$this->field[6]."='".$this->data[6]."'";
}

$query=	"UPDATE $this->table set ".$this->db_value." WHERE ".$this->field[0]."='".$this->data[0]."'";
 

    mysqli_query($this->conn,$query);
    return mysqli_affected_rows($this->conn);
}

public function cari($keyword){
    $bd=count($this->field);
        if ($bd===2) {
            $this->db_value=$this->field[0]." LIKE '%$keyword%' OR ".$this->field[1]." LIKE '%$keyword%' OR ";
        }elseif ($bd===3) {
            $this->db_value=$this->field[0]." LIKE '%$keyword%' OR ".$this->field[1]." LIKE '%$keyword%' OR ".$this->field[2]." LIKE '%$keyword%'";
        }elseif ($bd===4) {
            $this->db_value=$this->field[0]." LIKE '%$keyword%' OR ".$this->field[1]." LIKE '%$keyword%' OR ".$this->field[2]." LIKE '%$keyword%' OR ".$this->field[3]." LIKE '%$keyword%'";
        }elseif ($bd===5) {
            $this->db_value=$this->field[0]." LIKE '%$keyword%' OR ".$this->field[1]." LIKE '%$keyword%' OR ".$this->field[2]." LIKE '%$keyword%' OR ".$this->field[3]." LIKE '%$keyword%' OR ".$this->field[4]." LIKE '%$keyword%'";
        }elseif ($bd===6) {
            $this->db_value=$this->field[0]." LIKE '%$keyword%' OR ".$this->field[1]." LIKE '%$keyword%' OR ".$this->field[2]." LIKE '%$keyword%' OR ".$this->field[3]." LIKE '%$keyword%' OR ".$this->field[4]." LIKE '%$keyword%' OR ".$this->field[5]." LIKE '%$keyword%'";
        }elseif ($bd===7) {
            $this->db_value=$this->field[0]." LIKE '%$keyword%' OR ".$this->field[1]." LIKE '%$keyword%' OR ".$this->field[2]." LIKE '%$keyword%' OR ".$this->field[3]." LIKE '%$keyword%' OR ".$this->field[4]." LIKE '%$keyword%' OR ".$this->field[5]." LIKE '%$keyword%' OR ".$this->field[6]." LIKE '%$keyword%'";
        }
    
        $query="select*from $this->table where ".$this->db_value;

                $result=mysqli_query($this->conn,$query);
                $rows=[];
            
                while ($row= mysqli_fetch_assoc($result)){
                $rows[]=$row;
                }
                return$rows;
        }
    }
    $db= new database();

    ?>
