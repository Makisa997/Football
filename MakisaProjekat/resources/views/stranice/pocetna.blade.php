@extends('layouts.app')
@section('sadrzaj')
<div class="section-1">
    <h1>{{$naslov}}</h1>
    <h1>Cao!</h1>
    <p>Moje ime je Zivanovic Marko,ovo je moj ispitni projekat iz predmeta Razvoj Aplikacija Elektronskog poslovanja.
        Moj projekat ce biti o fudbalskom klubu Real Madrid.
    </p>                 
</div>
<div class="section-2">
    <h2>Zasto?</h2>
    <p>Projekat o Real Madridu sam izabrao zato sto sam vise projekata na ovom fakultetu radio na istu temu.
        </p>
    </div>
    <div class="section-3">
        <h3>Sta ce biti u projektu?</h3>
        <p>U projektu cu pisati neke osnove stvari vezane za sam klub i njegovu istoriju.
            Takodje prikazacu listu i podatke o nekim igracima ili podacima samim vezanim za klub.
            Ukoliko imate neku informaciju koji bi zeleli da dodate ,mozete uciniti na<a class="nav-link" href="{{url('posts')}}"> ovom linku</a>
        </p>                    
    </div>
</div>
</div>
<div class="slika">
<center><img src="images/realmadridlogo.jpg" alt="laptop"></center>
</div>
@endsection