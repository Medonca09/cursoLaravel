@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')

<style>
.card{
  height: 520px;
}

.card-image img{
  height: 150px;
}

.card-content{
  height: 290px;
}
</style>

<div class="container">
  <h3 class="center">Lista de Cursos</h3>
    <div class="row">
        @foreach($cursos as $curso)
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="{{asset($curso->imagem)}}">
            </div>
            <div class="card-content">
                <h4>{{$curso->titulo}}</h4>
                <p>{{$curso->descricao}}</p>
            </div>
            <div class="card-action">
              <a href="#">Ver mais...</a>
            </div>
        </div>
    </div>
    @endforeach
  </div>

  <ul class="pagination" style="display: flex ; justify-content: center">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    {{$cursos->links()}}
    <i class="material-icons">chevron_right</i></a></li>
  </ul>
</div>



@endsection