@if(session()->has('regis-success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('regis-success')}}
  </div>
@endif

<div class="pop-up" id="pop-up">
    <div class="close-btn">
        &times;
    </div>
    
    <div class="form">
        
        <h2>Sign-Up</h2>
        <form action="/sign-up" method="post" enctype="multipart/form-data">
            @csrf
        <div class="form-element">
            <label for="name">Name</label>
            <input type="name" name="name" id="name" placeholder="Type Here">
        </div>
        <div class="form-element">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter Email">
        </div>
        <div class="form-element">
            <label for="password">Password</label>
            <input type="password" name="password" id="password"  placeholder="Enter Password">
        </div>
        <div class="form-element">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" name="confirm-password" id="confirm-password " placeholder="Confirm Password">
        </div>
        
        <div class="form-element">
            <button class="btn-signup" type="submit">Sign-Up</button>
            {{-- <button class="btn-signup2" type="submit">Sign-Up2</button> --}}
        </div>
        
        </form>
        <div class="form-element">
            <h4>Or</h4>
            <hr>
            <button class="btn-login">Already Have Account? Login</button>
        </div>
    </div>
</div>