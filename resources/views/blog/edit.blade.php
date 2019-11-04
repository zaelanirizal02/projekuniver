@extends('layouts.master')

@section('title', 'Edit')

@section('content')
  <h1>Halaman Edit</h1>

  <form action="/blog/{{$artikel->id}}" method="post"><br>
    <input name="tittle" type="text" value="{{ $artikel->tittle }}"><br>
    <textarea name="deskripsi" rows="8" cols="40" >{{ $artikel->deskripsi }}</textarea>

    <input type="submit" name="submit" value="edit">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="put">
  </form>

  @endsection
