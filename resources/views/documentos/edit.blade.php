@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Documentos</div>

                <div class="panel-body">
                    
                    <table class="table">
                        {!! Form::open(['route' => ['documento.update',$documento->id],'method'=>'PUT'])!!}
                            <div class="form-group">
                            {!!Form::label('nombre','Nombre del documento') !!}
                            {!!Form::text ('nombre',$documento->nombre,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                            {!!Form::label('descripcion','descripcion del documento') !!}
                            {!!Form::text ('descripcion',$documento->descripcion,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                            {!!Form::label('cantidad','Cantidad de documentos') !!}
                            {!!Form::number('cantidad',$documento->cantidad,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                            {!!Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
                            </div>



                        {!! Form::close()!!}

                   </table>
                </div>
                @if($errors->has())
                    <ul class="aler alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error }} </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            
        </div>
    </div>
</div>
@endsection