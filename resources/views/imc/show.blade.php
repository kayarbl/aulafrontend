<x-layout title="Calcular IMC">
    <div class="titulo">
        <h1>HISTÓRICO DE IMC</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Peso</th>
                <th scope="col">Altura</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($showImc as $imc)
                <tr>
                    <th scope="row">{{$imc->id}}</th>
                    <td>{{$imc->nome}}</td>
                    <td>{{$imc->peso}}</td>
                    <td>{{$imc->altura}}</td>
                    <td>
                        <form id="deleteForm{{$imc->id}}" action="{{ route('imc.delete', ['id' => $imc->id]) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-default btn-lg" data-bs-toggle="modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                    <path
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                </svg>
                            </button>
                        </form>
                    </td>
                    <td>
                        <button data-bs-toggle="modal" data-bs-target="#myModal{{$imc->id}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" />
                                <path
                                    d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466" />
                            </svg>
                        </button>
                    </td>
                </tr>
                <div class="modal" id="myModal{{$imc->id}}" tabindex="-1" aria-labelledby="exemploMyModal{{$imc->id}}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('imc.update', ['id' => $imc->id])}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput{{$imc->id}}" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput{{$imc->id}}"
                                            placeholder="nome" name="novo_nome" value="{{$imc->nome}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput{{$imc->id}}" class="form-label">Peso</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput{{$imc->id}}"
                                            placeholder="peso" name="novo_peso" value="{{$imc->peso}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2{{$imc->id}}" class="form-label">Altura</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2{{$imc->id}}"
                                            placeholder="altura" name="novo_altura" value="{{$imc->altura}}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>

                            </div>


                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
</x-layout>