@extends("barre-admin")

@section("content")

<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">{{$nom}} </h1>
</div>

<form method="POST" action="accueil-admin">
    <label for="nom">Nom:</label><br>
    <input type="text" id="nom" name="nom" placeholder=""><br>
    <label for="module">Prénom:</label><br>
    <input type="text" id="module" name="module" placeholder="" ><br><br>
    <label for="module">Téléphone:</label><br>
    <input type="text" id="module" name="module" placeholder="" ><br><br>
    <label for="module">Mail:</label><br>
    <input type="text" id="module" name="module" placeholder="" ><br><br>
    <label for="module">Photo:</label><br>
    <input type="text" id="module" name="module" placeholder="" ><br><br>
    <label for="module">Description:</label><br>
    <input type="text" id="module" name="module" placeholder="" ><br><br>
    <button> Valider</button>
    <button> Annuler</button>
  </form>

<section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>
        @endsection
