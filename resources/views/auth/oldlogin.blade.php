@extends('layouts.app')


@section('content')
<style>
    :root {
  --link-color: #6c4bb4;
  --primary-color-opacity: #e9d5ff;
  --white-shade: #f0f8ff;
  --secondary-color: #1e293b;
  --primary-padding: 8px;
  --pilled-shape-radius: 40px;
  --color1: #4587D9;
  --color2: #4d81c0;
  --primary-gradient: linear-gradient(to right, var(--color2), var(--color1));
}

body {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: sans-serif;

}

.container {
  padding: 15px;
  border-radius: 10px;
  box-shadow: 2px 2px 10px #353636;
  background: #fff;
  width: 400px
}
.item-container {
  display: flex;
  justify-content: center;
  align-items: center;
}
.log-in {
  font-size: 35px;
  color: var(--secondary-color);
}
.log-in::after {
  content: "";
  display: block;
  width: 60%;
  height: 3px;
  margin-top: 8px;
  background: var(--primary-gradient);
  margin-inline: auto;
}
.form-input {
  display: flex;
  flex-direction: column;
  margin-bottom: 10px;
}
input[type="text"],
input[type="password"] {
  padding: var(--primary-padding);
  width: 100%;
  border-radius: var(--pilled-shape-radius);
  border: none;
  background: #e7fdf0;
  color: var(--secondary-color);
  outline: none;
  border: 1px solid transparent;
}
@media only screen and (max-width: 300px) {
  input[type="text"],
  input[type="password"] {
    width: 200px;
  }
}
input[type="text"]:focus-visible,
input[type="password"]:focus-visible {
  border: 1px solid var(--color1);
  background: transparent;
}
.label {
  color: var(--secondary-color);
  margin-bottom: 3px;
}
.display-space-between {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 10px 0 10px 0;
}

.item-container button {
  border-radius: 50%;
  border: none;
  padding: 5px;
  background: transparent;
  margin-left: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 2px 2px 5px #353636;
}

button[type="submit"] {
  width: 100%;
  padding: var(--primary-padding);
  border-radius: var(--pilled-shape-radius);
  border: none;
  background: var(--primary-gradient);
  color: var(--white-shade);
  margin: 10px 0 10px 0;
}
.chekbox-label {
  font-size: 14px;
}

a {
  text-decoration: none;
  color: var(--link-color);
  font-size: 14px;
}

</style>


<div class="container">
    <div class="item-container">
        <h2 class="log-in">Log in</h2>
    </div>


    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-input">
            <label for="email" class="label">Email</label>
            <input id="email" placeholder="Email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-input">
            <label for="password" class="label">Password</label>
            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="display-space-between">
            <div>
                <input type="checkbox" checked>
                <label for="password" class="chekbox-label">Remember Me</label>
            </div>
            <div>
                <a href="{{ route('password.request') }}">Forget password</a>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
        </div>
    </form>
    <div class="display-space-between">
        <a href="#">privacy policy</a>
        <a href="{{route('register')}}">Sign up</a>
    </div>
</div>
@endsection
