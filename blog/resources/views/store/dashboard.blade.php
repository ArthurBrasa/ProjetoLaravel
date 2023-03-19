@extends('layout.main')


@section('tile')
@section('content')

@auth
    teste
@endauth
@role('user')
    <h1>Ola User</h1>
    <h1>Ola User</h1>
    <h1>Ola User</h1>
    <h1>Ola User</h1>
    <h1>Ola User</h1>
    <h1>Ola User</h1>
    <h1>Ola User</h1>
    <h1>Ola User</h1>
    <h1>Ola User</h1>
    <h1>Ola User</h1>
@endrole

@role('admin')
    <h1>Ola Admin</h1>
    <h1>Ola Admin</h1>
    <h1>Ola Admin</h1>
    <h1>Ola Admin</h1>
    <h1>Ola Admin</h1>
    <h1>Ola Admin</h1>
@endrole
@role('Super-Admin')
        
    <h1>Ola Super Admin</h1>
    <h1>Ola Super Admin</h1>
    <h1>Ola Super Admin</h1>
    <h1>Ola Super Admin</h1>
    <h1>Ola Super Admin</h1>
    <h1>Ola Super Admin</h1>
    <h1>Ola Super Admin</h1>
    <h1>Ola Super Admin</h1>
    <h1>Ola Super Admin</h1>

@endrole

    @can('create articles')
        <h1>{{Auth::user()->name}}</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, voluptate? Quos eos explicabo neque totam, magnam quidem facere voluptatibus officia rem praesentium perspiciatis consequuntur eius repellendus eligendi magni necessitatibus odit esse saepe, voluptatem, iure reprehenderit cumque delectus? Nostrum sit recusandae perferendis. Ea quasi omnis voluptatem nostrum maiores sit voluptates.</p>
    @endcan

    

@endsection