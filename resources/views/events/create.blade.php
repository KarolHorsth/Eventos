@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <div class="d-flex align-items-center justify-content-between mb-4">
        <h1>Crie o seu evento</h1>
        <div class="wrapp">
          <label for="image">Imagem do evento:</label>
          <input type="file" id="image" name="image" class="form-control-file mb-3">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label for="date">Data do evento:</label>
            <input type="date" class="form-control" id="date" name="date">
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
          </div>
        </div>


        <div class="col-12 my-3">
          <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="title">O evento é privado?</label>
          <select name="private" id="private" class="w-auto form-control">
            <option value="0">Não</option>
            <option value="1">Sim</option>
          </select>
        </div>
        <div class="form-group mt-3">
          <label for="title">Adicione itens de infraestrutura:</label>
          <div class="form-group">
            <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
          </div>
          <div class="form-group">
            <input type="checkbox" name="items[]" value="Palco"> Palco
          </div>
          <div class="form-group">
            <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
          </div>
          <div class="form-group">
            <input type="checkbox" name="items[]" value="Open Food"> Open food
          </div>
          <div class="form-group">
            <input type="checkbox" name="items[]" value="Brindes"> Brindes
          </div>
        </div>
      </div>
      <input type="submit" class="btn btn-primary mt-3 ms-2" value="Criar Evento">
  </form>
</div>

@endsection

