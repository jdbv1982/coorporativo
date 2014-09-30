<?php namespace Coorporativo\Repositories;

use DB;

class MaeimpRepo {

    public function setPedimento($data)
    {
        foreach($data as $dato){
            $pedimento = $this->verificaDato($dato[0]);
            if($pedimento == 'false'){
                $this->insertaDato($dato);
            }
        }

        return "true";
    }

    public function insertaDato($data){
        $fecha = $data[2];
        $time = strtotime($fecha);
        $fecha = date('d-m-Y',$time);


        $sql = "INSERT INTO MAEIMP (PEDIMP, ADIMP, FECIMP, LOTIMP, REFIMP) VALUES ('$data[0]', '$data[1]', '$fecha', '$data[3]', '$data[4]')";
        DB::insert($sql);

    }

    public function verificaDato($ped){
        $pedimento = DB::select( "select pedimp from maeimp where pedimp ='$ped'" );
        if(empty($pedimento)){
            return 'false';
        }

        return 'true';

    }
}