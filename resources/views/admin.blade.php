@extends('layouts.admin')

@section('content')
<div style="background-color: #3C3D37; border-radius: 12,5px;">
    <h1>Witaj {{ Auth::user()->name }}</h1>
</div>
@endsection