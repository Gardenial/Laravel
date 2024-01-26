
<x-layout title="Forumulário Cadastro">
    <div class="container">
        @foreach ($dados as $dado)
        
            <li class="list-group-item">{{$dado->nome}}</li>
            <br>
            <li class="list-group-item">{{$dado->telefone}}</li>
            <br><br>

        @endforeach


    </div>
    <form action="/cadastrar/salvar" method="POST">
        @csrf {{-- Valida o Form --}}
        <br>
        <label for=""> Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Informe seu nome" required><br><br>

        <label for=""> Telefone :</label>
        <input type="tel" name="telefone" id="telefone" placeholder="(11)99999-9999" required> <br><br>

        <button type="submit"> Enviar </button>
    </form>

</x-layout>