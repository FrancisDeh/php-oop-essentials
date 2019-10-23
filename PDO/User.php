<?php

class User {
    private $tableName = 'users'; 
    private $dbCon;
        // First, save the connection in a private property.
    function __construct($dbCon) {
            $this->dbCon = $dbCon;
        }


      // Insert new user to the database.
function insert($name,$phone,$city) {
    // The insert query.
    $sql = "INSERT INTO `{$this->tableName}` (`name`,`phone`, `city`, `date_added`)
            VALUES (:name,:phone,:city,:created)";
    // Bind and filter.
    $query = $this->dbCon->prepare($sql);

    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':phone',$phone,PDO::PARAM_STR);
    $query->bindParam(':city',$city,PDO::PARAM_STR);
        $now = date('Y-m-d');
    $query->bindParam(':created',$now,PDO::PARAM_STR);
    $query->execute();
    // The id of the newly created row in the table.
    $lastInsertId = $this->dbCon->lastInsertId();
    if($lastInsertId>0) return $lastInsertId;
        else
    return false;
}

function getUserById($id) {
    $sql = "SELECT * FROM `{$this->tableName}` WHERE `id` = :id LIMIT 1"; 
    $query = $this->dbCon->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ); 
    if($query->rowCount() < 1) return false;

    return $results[0]; 
}

// Get all the users.
function getAll(){
    $sql = "SELECT * FROM `{$this->tableName}`";
     $query = $this->dbCon->prepare($sql);
    $query -> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
     if($query -> rowCount() < 1) return false;
    return $results; 
}
    
function updateUser($id,$array) {
    $sql = "UPDATE `{$this->tableName}` SET ";
    $columns = array();

    foreach($array as $fieldName => $value) {
        $columns[] = "`{$fieldName}` = :{$fieldName}"; 
    }
    $sql .= implode(',',$columns);
    $sql .= ' WHERE `id` = :id';
    $query = $this->dbCon->prepare($sql);
    foreach($array as $fieldName => $value) {
            // Use bindValue, not bindParam because
            //  bindParam only gets its value at the time of execution.
        $query -> bindValue(":{$fieldName}",$value); 
    }

    $query -> bindParam(':id', $id, PDO::PARAM_INT);
    $query -> execute();
    if($query -> rowCount()) return false;
    return $id; 
}

function delete($id) {
    $sql = "DELETE FROM `{$this->tableName}` WHERE `id`=:id"; 
    $query = $this->dbCon->prepare($sql);
    $query -> bindParam(':id', $id, PDO::PARAM_INT);
    $query -> execute();
    if($query -> rowCount() < 1) return false;
    return true; 
}
}

// Create the pdo object.
$db = new Db;
// Get the connection.
$dbCon   = $db->get();
// When creating the new User class // pass the connection.
$userObj = new User($dbCon);
// Test insertion.
var_dump($userObj->insert('James Tiberius Kirk','0544308209','Riverside, Iowa'));
// Test selection.
var_dump($userObj->getUserById(1));
var_dump($userObj->getAll());
// Test update.
$array=['name'=>'Captain Kirk','city'=>'Tarsus IV','date_added'=>'2233-03-22'];
var_dump($userObj->updateUser(1,$array));
var_dump($userObj->getUserById(1));
// Test deletion.
var_dump($userObj->delete(1));
    
