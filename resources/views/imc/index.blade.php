<x-layout tittle="IMC">

<h1> TESTE <h1>

<form method="post" action="/imc/store">
    @csrf 
    
  <div class="mb-3">
    <label for="formGroupExempleInput" class="form-label">Peso</label>
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

<label> RESULTADO </label> <br>

<label> IMC: {{$resultado["imc"]}}</label> <br>

<label> Faixa: {{$resultado["imc"]}}</label> <br>

<br> <br> <br>

</x-layout>