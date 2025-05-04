<?php
require_once __DIR__ . '/../models/Alumnos.php';
class alumnosController{
    private $alumno;
    public function __construct(){
        $this->alumno = new alumno();
        }
        public function index(){
            $alumno = $this->alumno->all();
            include __DIR__ . '../../view/index/alumnos.php';
        }
        public function find($id){
            $alumno = $this->alumno->find($id);
            include __DIR__ . '../../view/index/edit.php';
        }
    public function update($id, $nombre, $apellido, $grado){
        $classUpdate =$this->alumno->update($id, $nombre, $apellido, $grado);
        header('Location: index.php');
    }
    public function delete($id){
        $classDelete = $this->alumno->delete($id);
        header('Location: index.php');
    }
    public function create(){
        include __DIR__ . '../../view/index/create.php';
    }
    public function tienda($data){
        $classCreate = $this->alumno->tienda($data);
        header('Location: index.php');
    }
}
?>