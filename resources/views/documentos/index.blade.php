@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Documentos</div>

                <div class="panel-body">
                    
                    <table class="table">
                        <tr>
                            <th>Nombre</th>
                            <th>Accion</th>
                        </tr>
                        @foreach($documentos as $documento)
                            <tr>
                                <td>{{$documento->nombre}} </td>
                                <td>
                                    {{link_to_route('documento.edit','Editar',[$documento->id],['class'=>'btn btn-warning'])    }}
                                    |
                                    
                                     <a " href=" {{route('documento.destroy',$documento->id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><font color="black" size="2"> <b>Eliminar</b></font></a>
                                  
                                    
                                </td>
                            </tr>
                             


                        @endforeach
                   </table>
                </div>
            </div>
            {{link_to_route('documento.create', 'Agregar nuevo documento',null,['class'=>'btn btn-primary'])}}
        </div>
    </div>
</div>
@endsection