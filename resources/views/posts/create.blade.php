@extends('layout')

@section('title', 'Création d\'un nouvel article')

@section('content')
    <h1>Poser une question</h1>
    
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        
        @if($errors->any())
            <aside class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </aside>
        @endif
        
    <div class="form-group">
        <label for="exampleFormControlInput1">Titre</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
    </div>
        
    <div class="form-group">
        <label for="exampleFormControlSelect2">Catégories</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
    </div>
        
        <button class="btn btn-primary">Envoyer</button>
    </form>
@endsection