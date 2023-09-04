@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')
<div class="container">
    <h3 class="center" style="color: #fff">Adicionar Curso</h3>
    <div class="row">
        <form class="" action="{{ route('admin.cursos.salvar') }}" method="post" enctype="multipart/form-data" style="color: #fff">
            {{ csrf_field() }}
            @include('admin.cursos._form')
            <button class="btn deep-purple darken-3">Salvar</button>
        </form>
    </div>
</div>



@endsection