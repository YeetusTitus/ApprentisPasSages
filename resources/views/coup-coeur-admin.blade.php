@extends("barre-admin")

@section("content")
<!-- coup de coeur -->

<div id="ban" class="container-fluid m-t-1 ban">
    <h1 id="titreAssociation" style="box-sizing:border-box;">Coups de cœur</h1>
</div>
<section class="cdc">
    <a href="ajout" class="fas fa-plus-circle"></a>

         @foreach ($ccdc as $cc)
        <ul class="CategorieCoupDeCoeur">
            <li>
                {{-- <a href="{{ url('update/'.$cc->id) }}" class="fas fa-edit"></a> --}}
                <form action="{{ url('/catcdcDelete'.$cc->id) }}" method="post">
                    {{ csrf_field() }}
                    {!! method_field('DELETE') !!}
                    <button class="btn btn-danger">
                        <i class="fas fa-minus-circle"></i>
                    </button>
                </form>
                <h2>{{$cc->nom}} :</h2>

                <a href="ajout" class="fas fa-plus-circle"></a>



                    @foreach ($cdc as $c)
                    @if($c->categoriecoupsdecoeur_id==$cc->id)
                <ul>
                    <li>
                        {{-- <a href="{{ url('update/'.$c->categoriecoupsdecoeur_id) }}" class="fas fa-edit"></a> --}}
                        <form action="{{ url('/cdcDelete'.$c->id) }}" method="post">
                            {{ csrf_field() }}
                            {!! method_field('DELETE') !!}
                            <button class="btn btn-danger">
                                <i class="fas fa-minus-circle"></i>
                            </button>
                        </form>
                       <a href="{{$c->lien}}" taget="_blank" title="{{$c->description}}"> {{$c->nom}}</a>
                    </li>
                </ul>
                    @endif
                    @endforeach

            </li>
        </ul>
            @endforeach

    </section>
    <div class="m-t-1 ban2">

    </div>
    @endsection
