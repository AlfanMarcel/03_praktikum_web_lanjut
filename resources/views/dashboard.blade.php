@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
<ul>
    @foreach ($warga as $data)
    <li>
        {{$data -> nama}}
        {{$data -> umur}}
        <br><br>
    </li>
    @endforeach

@section('footer')
    <p class="text-center">
        2141720266 | <a class="text-body" href="https://github.com/AlfanMarcel">Alfan Marcel Mulyawan</a>
    </p>
@endsection

@section('js')
    <script>
        alert('Selamat Datang')
    </script>
@endsection