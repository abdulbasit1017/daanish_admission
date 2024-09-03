@extends('layout')

@section('content')
<style>
    /* Add this to your CSS file (e.g., public/css/style.css) */
.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-form {
    width: 100%;
    max-width: 400px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    background-color: #fff;
}

.login-form h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border: 1px solid #ddd;
}

.btn-success {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #18772c;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #18770c;
}

</style>
<div class="login-container">
    <div class="login-form">
        <h2>Login</h2>
         <!-- Display success or error messages -->
         @if(session('success'))
         <div class="alert alert-success">
             {{ session('success') }}
         </div>
         @endif

         @if(session('error'))
         <div class="alert alert-danger">
             {{ session('error') }}
         </div>
         @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">User Name</label>
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
