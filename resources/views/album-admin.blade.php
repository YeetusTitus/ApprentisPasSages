

@extends("template")

@section("content")
<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">{{$nom}} </h1>
</div>
      <!-- galerie -->
      <a href="ajout" class="fas fa-plus-circle"></a>
        <section class="album">
            <div class="photo">

                @foreach ($photos as $photo)
                @foreach ($photo as $p)
                 {{-- <a href="{{ url('update/'.$catalogue->id) }}" class="fas fa-edit"></a> --}}
                 {{-- <form action="{{ Route('TemplateController.demandeSuppression', ["choix"=>"photo" ,'id1'=>$p->id,"id2"=>""]) }}" method="post"> --}}
                    {{ csrf_field() }}
                    <button class="btn btn-danger">
                        <i class="fas fa-minus-circle"></i>
                    </button>
                </form>
                <div class="image">
                    <img src="{{asset("storage/images/$p->chemin ")}}" alt="{{$p->chemin}}" class = "image">
                </div>
                @endforeach


                @endforeach
                </div>
        </section>
<section id="coupDeCoeur" class ="cdc">
    <div class="m-t-1 ban2">
    </div>
</section>
        @endsection
