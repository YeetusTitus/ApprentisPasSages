@extends('templates/template')

@section("content")


<div id="banOneTeam" class="container-fluid ban"></div>
{{--Prestations--}}
<section class="mr-5 ml-5">
  <div class="ml-2 mr-2">
      @foreach ($team as $membre)
          @include('visiteur/OneTeam', compact('team'))
      @endforeach
  </div>
</section>
{{--ENDPrestations--}}

@endsection
