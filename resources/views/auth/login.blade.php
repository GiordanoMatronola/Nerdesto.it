<x-layout>
  <div style="height:130"></div>
  <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card glass-bg">
                <div class="card-body">
                    <h2 class="welcome-heading">{{__('ui.loginWelcome')}}</h2>
                    <form method="POST" action="/login">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">{{__('ui.email')}}</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">{{__('ui.loginEmailDisclaimer')}}</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{__('ui.Password')}}</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">{{__('ui.loginRemember')}}</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">{{__('ui.loginEnter')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height:90"></div>
</x-layout>