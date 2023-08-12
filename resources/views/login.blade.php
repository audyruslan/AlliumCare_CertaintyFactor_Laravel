@extends('layout.main')

@section('container')
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="card-title text-center">Login</h1>
                            </div>
                            <div class="card-body px-3 py-0-5">
                                <div class="row">
                                    <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                {{ session('status') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif
                                        <form action="{{ route('login_process') }}" method="post">
                                            @csrf
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <input type="email" name="email" autocomplete="off"
                                                    class="form-control form-control-xl" placeholder="email">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <input type="password" autocomplete="off" name="password"
                                                    class="form-control form-control-xl" placeholder="Password">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-shield-lock"></i>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
