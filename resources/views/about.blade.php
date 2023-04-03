<h1>About Page</h1>

<a href="/">Home </a>
<h3>Hello </h3>

{{-- @if($id < 10)
    <b>bir xonali son</b>
@elseif($id < 100)
    <b>ikki xonali son</b>
@elseif($id < 1000)
    <b>uch xonali son</b>
@endif <br> --}}

@for ($i = 0; $i < 10; $i++)
    {{ $i }}<br>
@endfor

@php

$users = array(
    array(
        'id' => 1,
        'name' => 'Ali',
    ),
    array(
        'id' => 2,
        'name' => 'Vali',
    ),
    array(
        'id' => 3,
        'name' => 'Aziz',
    ),
);

@endphp

@forelse ($users as $user)
    <li>{{ $user['name'] }}</li>
@empty
    <p>No users</p>
@endforelse

<h2>Kattasi : {{ $max }}</h2>
