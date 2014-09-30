@extends('layouts/layout')

@section('content')
    <h3>Importar Pedimentos y Articulos</h3>

    <div class="row">
    	<div class="col-xs-6 col-sm-6 col-sm-offset-3">
    	<legend>Importar Pedimentos</legend>
    		<div class="form-group">
    			{{ Form::label('pedimentos','Seleccione Archivo') }}
    			<div class="controls">
    				{{ Form::file('pedimentos', array('class'=>'form-control','id'=>'pedimentos')) }}

    			</div>
    		</div>
    		<div class="form-group">
    			<a href="#" class="btn btn-primary" id="inserta-pedimentos">Aceptar</a>
    			<a href="{{ route('home' ) }}" class="btn btn-primary">Cancelar</a>
    		</div>
    	</div>

    </div>

        <div class="row">
        	<div class="col-xs-6 col-sm-6 col-sm-offset-3">
        	<legend>Importar Articulos</legend>
        		<div class="form-group">
        			{{ Form::label('articulos','Seleccione Archivo') }}
        			<div class="controls">
        				{{ Form::file('articulos', array('class'=>'form-control','id'=>'articulos')) }}
        			</div>
        		</div>
        		<div class="form-group">
        			<a href="#" class="btn btn-primary" id="inserta-articulos">Aceptar</a>
        			<a href="{{ route('home') }}" class="btn btn-primary">Cancelar</a>
        		</div>
        	</div>

        </div>


        <!-- Small modal -->
        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div>
                  <img src="../../public/assets/images/loader.gif" alt=""/>
                  Procesando Informacion....
              </div>
            </div>
          </div>
        </div>
@stop

