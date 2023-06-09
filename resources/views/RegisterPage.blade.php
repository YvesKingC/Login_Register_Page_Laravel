@extends('layout/navbar')
<div class="container">
@section('bladenavbar')
    <div class="registration-form">
      <h2>Account Registration</h2>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="fullname" placeholder="Full Name" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
      </form>
    </div>
@endsection
</div>