
@extends("barre-admin")

@section("content")
<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">{{$nom}} </h1>
</div>
      <!-- galerie -->
      <a href="ajout" class="fas fa-plus-circle"></a>
        <section class="album">
            <div class="row">
                @foreach ($photos as $photo)
                @foreach ($photo as $p)
                {{-- <a href="{{ url('update/'.$catalogue->id) }}" class="fas fa-edit"></a> --}}
                <a href="{{ url('delete/'.$p->id) }}" class="fas fa-minus-circle"></a>
                    <img src="{{asset("images/$p->chemin ")}}">
                @endforeach
                @endforeach
        </section>
<section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>
        @endsection
