<?php
class Employee{
// Connection
private $conn;
// Table
private $db_table = "Employee";
// Columns
public $id;
public $no;
public $nama;
public $lokasi;
public $deskripsi;
public $kapasitas;
public $jumlah_alat;
public $created;
// Db connection
public function __construct($db){
$this->conn = $db;
}
// GET ALL
public function getEmployees(){

$sqlQuery = "SELECT id, nama, lokasi, deskripsi, kapasitas, jumlah_alat, created FROM "
. $this->db_table . "";
$stmt = $this->conn->prepare($sqlQuery);
$stmt->execute();
return $stmt;
}
// CREATE
public function createEmployee(){
    $sqlQuery = "INSERT INTO
    ". $this->db_table ."
    SET
    nama = :nama,
    lokasi = :lokasi,
    deskripsi = :deskripsi,
    kapasitas = :kapasitas,
    jumlah_alat = :jumlah_alat,
    created = :created";
    $stmt = $this->conn->prepare($sqlQuery);
    // sanitize
    $this->nama=htmlspecialchars(strip_tags($this->nama));
    $this->lokasi=htmlspecialchars(strip_tags($this->lokasi));
    $this->kapasitas=htmlspecialchars(strip_tags($this->kapasitas));
    $this->jumlah_alat=htmlspecialchars(strip_tags($this->jumlah_alat));
    $this->created=htmlspecialchars(strip_tags($this->created));
    // bind data
    $stmt->bindParam(":nama", $this->nama);
    $stmt->bindParam(":lokasi", $this->lokasi);
    $stmt->bindParam(":deskripsi", $this->deskripsi);
    $stmt->bindParam(":kapasitas", $this->kapasitas);
    $stmt->bindParam(":jumlah_alat", $this->jumlah_alat);
    $stmt->bindParam(":created", $this->created);
    if($stmt->execute()){
        return true;
}
return false;
}
// READ single
public function getSingleEmployee(){
$sqlQuery = "SELECT
id,
nama,
lokasi,
deskripsi,
kapasitas,
jumlah_alat, 
created
FROM
". $this->db_table ."
WHERE
id = ?
LIMIT 0,1";
$stmt = $this->conn->prepare($sqlQuery);
$stmt->bindParam(1, $this->id);
$stmt->execute();
$dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
$this->nama = $dataRow['nama'];
$this->lokasi = $dataRow['lokasi'];
$this->deskripsi = $dataRow['deskripsi'];
$this->kapasitas = $dataRow['kapasitas'];
$this->jumlah_alat = $dataRow['jumlah_alat'];
$this->created = $dataRow['created'];
} 
// UPDATE
public function updateEmployee(){
  $sqlQuery = "UPDATE
  ". $this->db_table ."
  SET
  nama = :nama, 
  lokasi = :lokasi, 
  deskripsi = :deskripsi, 
  kapasitas = :kapasitas, 
  jumlah_alat = :jumlah_alat, 
  created = :created
  WHERE 
  id = :id";
    $stmt = $this->conn->prepare($sqlQuery);
            $this->nama=htmlspecialchars(strip_tags($this->nama));
            $this->lokasi=htmlspecialchars(strip_tags($this->lokasi));
            $this->deskripsi=htmlspecialchars(strip_tags($this->deskripsi));
            $this->kapasitas=htmlspecialchars(strip_tags($this->kapasitas));
           $this->jumlah_alat=htmlspecialchars(strip_tags($this->jumlah_alat));
            $this->created=htmlspecialchars(strip_tags($this->created));
            $this->id=htmlspecialchars(strip_tags($this->id));
// bind data
    $stmt->bindParam(":nama", $this->nama);
            $stmt->bindParam(":lokasi", $this->lokasi);
            $stmt->bindParam(":deskripsi", $this->deskripsi);
            $stmt->bindParam(":kapasitas", $this->kapasitas);
            $stmt->bindParam(":jumlah_alat", $this->jumlah_alat);
            $stmt->bindParam(":created", $this->created);
            $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
}
// DELETE
function deleteEmployee(){
    $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
    $stmt = $this->conn->prepare($sqlQuery);
    $this->id=htmlspecialchars(strip_tags($this->id));
    $stmt->bindParam(1, $this->id);
    if($stmt->execute()){
    return true;
    }
    return false;
    }
    }
    ?>
    