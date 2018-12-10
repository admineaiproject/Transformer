@extends('layouts.app')

@section('content')
<div class="col-md-6 col-lg-6 offset-md-3 offset-lg-3">
<div class="card"  style="width: 30rem;">
  <div class="card-header">Companies</div>
  <a  class="pull-right btn btn-primary btn-sm" href="/companies/create">
    <i class="fa fa-plus-square" aria-hidden="true"></i>  Create new</a> </div>

  <ul class="list-group list-group-flush">
  @foreach($companies as $company)
    <li class="list-group-item"><a href="/companies/{{ $company->id }}" >{{$company->name}}</li>
  @endforeach
  </ul>
</div>
</div>

@endsection