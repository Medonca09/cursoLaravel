<div class="input-field">
    <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : '' }}">
    <label style="color:#7e57c2">Título</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
    <label style="color:#7e57c2">Descrição</label >
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
    <label style="color:#7e57c2">Valor</label>
</div>

<div class="file-field  input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
@if(isset($registro->imagem))
<div class="input-field">
<img width="150" src="{{asset($registro->imagem)}}" />
</div>
@endif

<div>
    <p>
        <input type="checkbox" id="test5" name="publicado" {{isset($registro->publicado) && $registro->publicado =='sim' ? 'checked' : '' }} value="true"/>
        <label for="test5" style="color: #fff">Publicar ?</label>
      </p>
      <br><br>
</div>