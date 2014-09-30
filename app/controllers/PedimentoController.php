<?php

use Coorporativo\Repositories\MaeimpRepo;
use Coorporativo\Repositories\ArtimpRepo;

class PedimentoController extends BaseController {

    protected $maeimpRepo;
    protected $artimpRepo;

    function __construct(MaeimpRepo $maeimpRepo, ArtimpRepo $artimpRepo)
    {
        $this->maeimpRepo = $maeimpRepo;
        $this->artimpRepo = $artimpRepo;
    }


    public function insertarPedimento(){
        return View::make('utilerias/pedimento');
    }

    public function setPedimentos(){
        $data = $_POST['registro'];
        return $this->maeimpRepo->setPedimento($data);
    }

    public function setArticulos(){
        $data = $_POST['registro'];
        return $this->artimpRepo->setArticulo($data);
    }


    public function uploadArchivo()
    {
        $name = $_POST["nombre"];
        //return $_POST['opcion'];
        $upload_dir = '../tmp/';
        if (isset($_FILES["myfile"])) {
            if ($_FILES["myfile"]["error"] > 0) {
                echo "Error: " . $_FILES["file"]["error"] . "<br>";
            } else{
                move_uploaded_file($_FILES["myfile"]["tmp_name"], $upload_dir . $name . ".xlsx");
            }
        }

        return $this->getRegistro($name);
    }


    public function getRegistro($name){
        $archivo = '../tmp/' . $name . '.xlsx';
        $datos = array();
        $objReader = \PHPExcel_IOFactory::createReader("Excel2007");
        $objReader->setReadDataOnly(true);
        $objPHPExcel = $objReader->load($archivo);
        $objWorksheet = $objPHPExcel->getActiveSheet();

        foreach($objWorksheet->getRowIterator() as $row){
            $registro = array();
            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(false);
            foreach($cellIterator as $cell){
                array_push($registro, $cell->getValue());
            }
            array_push($datos, $registro);
        }
        return Response::json($datos);
    }

}
