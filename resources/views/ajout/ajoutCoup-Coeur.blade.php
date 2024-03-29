@extends('templates/barre-admin')

@section("content")

  <form action="" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="ajoutCC" value="Yes">
    @foreach($ccdc as $cc)
      <input type="hidden" name="categorieId" value="{{$cc->id}}">
      <h1>Categorie : {{$cc->nom}}</h1>
    @endforeach
      
    <label for="lienEdit">Lien</label>
    <input type="text" id="lienEdit" name ="lien" required>

    <label for="nomEdit">Nom</label>
    <input type="text" id="nomEdit" name ="nom" required>

    <label for="descriptionEdit">description</label>   
    <textarea id="descriptionEdit" name ="description"></textarea>

    <input type="submit" value="Ajouter" name ="ajouter" >
  </form>
  <a href="{{route('coupDeCoeur-Admin')}}"><h1>Revenir à Coups de Coeur</h1></a>

  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

  <script>
    CKEDITOR.replace( 'descriptionEdit', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
  </script>
@endsection