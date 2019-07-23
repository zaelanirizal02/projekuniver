@extends('layouts.master')

@section('title', 'universal | home')


<div class="container">

@section('content')
<h1> Data Artikel yang terdaftar</h1

@foreach($artikels as $artikel)
<br>

<li>
   <a href="{{ route('link', $artikel->id) }}">{{$artikel->nama_artikel}}</a>
     <form action="/blog/{{$artikel->id}}" method="post"><br>
       <input type="submit" name="submit" value="delete">
       {{ csrf_field() }}
       <input type="hidden" name="_method" value="DELETE">
     </form>
</li>

@endforeach

@foreach($artikels as $artikel)
 <li>{{ $artikel->nama_artikel }}</li>
 @endforeach

@endsection
</div>
