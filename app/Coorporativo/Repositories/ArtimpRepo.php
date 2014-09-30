<?php namespace Coorporativo\Repositories;

use DB;

class ArtimpRepo {

    public function setArticulo($data){
        foreach($data as $dato) {
            /* $articulo = $this->verificaArticulo($dato[0], $dato[1]);
             if ($articulo == 'false') {
                 $this->insertaArticulo($dato);
             } else {
                 $this->actualizaArticulo($dato, $articulo);
             }*/
            return $this->activarImportacion($dato[1]);
        }
        //return "true";
    }

    public function insertaArticulo($data){
        DB::insert("INSERT INTO ARTIMP (PEDIMP, NUMART, CANARTIMP, FECDIMP) VALUES (?, ?, ?, ?)", [$data[0], $data[1], $data[2], $data[3]]);
    }

    public function actualizaArticulo($data, $articulo){
        $cantidad = $this->sumaCantidad($data[0], $data[1], $data[2]);
        $sql = "update artimp set canartimp = " . $cantidad . " where pedimp = " . "'$data[0]'" . " and numart = " . "'$data[1]'";
        DB::update(DB::raw($sql));
    }

    public function verificaArticulo($pedimp, $numart){
        $articulo = DB::select("select * from artimp where pedimp = '$pedimp' and numart = '$numart'");

        if(empty($articulo)){
            return 'false';
        }

        return 'true';

    }

    public function sumaCantidad($pedimp,$numart, $_cantidad){
        $cantidad = DB::select("select canartimp from artimp where pedimp = '$pedimp' and numart = '$numart'");

        return $cantidad[0]->CANARTIMP + $_cantidad;
    }

    public function activarImportacion($numart){
        $sql = "select flgart from maeart where numart = " . "'$numart'";
        $flag = DB::select(DB::raw($sql));

        return $flag;

    }

}