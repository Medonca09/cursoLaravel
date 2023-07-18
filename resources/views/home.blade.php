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

.page ul{
  display: flex;
  align-items: center
}

.page li.active{
    background-color: #f39a7f;
    display: flex;
    align-content: center;
    padding: 0 10px;
    flex-wrap: wrap;
    margin-right: 10px;
}

.page li {
  display: flex;
  align-items: center;
  padding: 0 10px;
}

 #chevron-left{
  display: flex;
  align-items: center;
  margin-right: 0px;
  font-size: 1.5rem;
}

#chevron-right{
  display: flex;
  align-items: center;
  margin-left: 0px;
  font-size: 1.5rem;
}

.pagination li a {
    color: #444;
    display: inline-block;
    font-size: 1.2rem; 
    padding: 0px;
    line-height: 0px;
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

  <div class="page" style="display: flex; justify-content: center">
    {{$cursos->links()}}
  </div>  
  </ul>
</div>



@endsection