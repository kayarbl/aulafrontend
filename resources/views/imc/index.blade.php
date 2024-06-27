
<x-layout tittle="IMC">

<h1 style="color: black; text-align: center;"> TESTE <h1>

<form method="post" action="/imc/store" class="mbb3">
    @csrf 
  
    <div class="mb-3">
    <label for="formGroupExempleInput" class="form-label" >Nome</label>
    <input type="text" class="form-control" id="formGroupExempleInput" palceholder="nome" name="nome">
  </div> 

  <div class="mb-3">
    <label for="formGroupExempleInput" class="form-label" >Peso</label>
    <input type="text" class="form-control" id="formGroupExempleInput" palceholder="peso" name="peso">
  </div>

  <div class="mb-3">
    <label for="formGroupExempleInput2" class="form-label">Altura</label>
    <input type="text" class="form-control" id="formGroupExempleInput" palceholder="altura" name="altura">
  </div>
<div class="col-12">
<button type="submit" class="btn btn-primary">Calcular</button>
</div>
</form>

<label style="color: gray;"> RESULTADO </label> <br>

<label style="color: pink;"> IMC: {{$resultado["imc"]}}</label> <br>

<label style="color: pink;"> Faixa: {{$resultado["imc"]}}</label> <br>

<br> <br> <br>

</x-layout>