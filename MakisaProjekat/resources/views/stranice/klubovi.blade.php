@extends('layouts.app')
@section('sadrzaj')
<h1>{{$naslov}}</h1>
<ul class="list-group">
    @foreach($nizklubova as $nizk)
 <li class="list-group-item">{{$nizk}}</li>
 </ul> 
@endforeach
<div class="slikaManja">
<img src="images/gal2.jpg" alt="laptop">
</div>
<div class="slikaManja">
<img src="images/basketball.jpg" alt="laptop">
</div>
<div class="slikaManja">
<img src="images/femaleteam.jpg" alt="laptop">
</div>
@endsection