@extends('layouts.app')
@section('sadrzaj')
<h1>Nase objave</h1>
<ul class="nav navbar-nav navbar-right">
 <li class="nav-item active">
 <a class="nav-link" href="{{url('posts/create')}}">Kreiraj objavu</a>
 </li>
 </ul>
@if(count($postovi)>0)
 @foreach($postovi as $nasipostovi)
 <div class="card p-4">
 <h3><a href="posts/{{$nasipostovi->id}}">{{$nasipostovi->title}}</a></h3>
 <small>Napisan je {{$nasipostovi->created_at}}</small>
 </div>
 </br>
 @endforeach
 {{$postovi->links()}}
 @else
 <p>
 No Posts found
 </p>
 @endif
@endsection
