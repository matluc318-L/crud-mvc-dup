<?php
require_once __DIR__ . '/../config/database.php';
class alumno{
private $conexion;
public function __construct(){
    $this->conexion = Database::conectar();
}
public function all(){
    $stmt = $this->conexion->query("SELECT * FROM alumnos");
    $alumno = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $alumno;
}
public function find($id){
    $stmt = $this->conexion->query("SELECT * FROM alumnos WHERE id =$id");
    $alumno = $stmt->fetch(PDO::FETCH_ASSOC);
        return $alumno;
}
public function update($id, $nombre, $apellido, $grado) {
    $stmt = $this->conexion->prepare("UPDATE alumnos SET nombre=?, apellido=?, grado=? WHERE id=?");
    return $stmt->execute([$nombre, $apellido, $grado, $id]);
}
public function delete ($id){   
    $stmt = $this->conexion->prepare("DELETE FROM alumnos WHERE id=?");
    return $stmt->execute([$id]);
}
    public function create(){
        include __DIR__  . '/../views/alumnos/create.php';
    }

public function tienda($data){
    $query="INSERT INTO alumnos (id,nombre,apellido,grado) VALUES(?,?,?,?);";
    $stmt = $this->conexion->prepare($query);
    return $stmt->execute([$data['id'],$data['nombre'],$data['apellido'],$data['grado']]);


}
}


?>