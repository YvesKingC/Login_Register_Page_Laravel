@extends('layout/navbar')
<div class="container">
@section('bladenavbar')

<div class="login-form">
  <h2>Login</h2>
  <form action="{{ route('login') }}" method="POST">
  @csrf
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit">Login</button>
  </form>
  </div>
  
@endsection
</div>