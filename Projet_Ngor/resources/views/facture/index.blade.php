@extends('layouts.default')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Facture</h1> 
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Mois</td>
          <td>Consommation</td>
          <td>Prix</td>
          <td>Réglement</td>
          <td>Abonnement</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($facture as $facture)
        <tr>
            <td>{{$facture->id}}</td>
            <td>{{$facture->mois}}</td>
            <td>{{$facture->consommation}}</td>
            <td>{{$facture->prix}}</td>
            <td>{{$facture->reglement}}</td>
            <td>{{$facture->abonnement->id}}</td>
            <td>
                <a href="{{ route('facture.edit',$facture->id)}}" class="btn btn-primary">Modifier</a>
            </td>
            <td>
                <form action="{{ route('facture.destroy', $facture->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div>
    <a style="margin: 19px;" href="{{ route('facture.create')}}" class="btn btn-primary">Nouveau Facture</a>
</div> 

</div>
@endsection