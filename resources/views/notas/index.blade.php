
<x-layout tittle="NOTAS">

<form method="post" action="/notas/store" class="mbb3">
    @csrf 
  
    <div class="mb-3">
    <label for="formGroupExempleInput" class="form-label" >Nome</label>
    <input type="text" class="form-control" id="formGroupExempleInput" palceholder="nome" name="nome">
  </div> 

  <div class="mb-3">
    <label for="formGroupExempleInput" class="form-label" >Nota</label>
    <input type="text" class="form-control" id="formGroupExempleInput" palceholder="peso" name="peso">
  </div>

<div class="col-12">
<button type="submit" class="btn btn-primary">Resultado</button>
</div>
</form>

<label style="color: gray;"> RESULTADO </label> <br>

<label style="color: pink;"> Média: {{$resultado["notas"]}}</label> <br>

<br> <br> <br>

</x-layout>