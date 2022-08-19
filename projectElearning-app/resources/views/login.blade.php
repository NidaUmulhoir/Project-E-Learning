@if(session()->has('login-error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{session('login-error')}}
  </div>
@endif

<div class="pop-up-login" id="pop-up-login">
    <div class="close-btn">
        &times;
    </div>
    <div class="form">
        <h2>Login</h2>
        <form action="/login-to" method="post">
        @csrf
            <div class="form-element">
            <label for="email">Email</label>
            <input type="name" name="email" id="email" placeholder="Enter Email">
        </div>
        <div class="form-element">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Password">
        </div>

        <div class="form-element">
            <button class="btn-login" type="submit">Login</button>
        </div>
    </form>
        <div class="form-element">
            <h4>Or</h4>
            <hr>
            <button class="btn-signup2"> New around here? Sign-Up</button>
        </div>
    </div>
</form>
</div>