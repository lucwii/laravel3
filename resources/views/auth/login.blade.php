@extends("layout/public")

@section("title")
Login stranica
@endsection

@section("content")

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if (session("success"))
                    <div class="alert alert-success">
                        {{session("success")}}
                    </div>
                @endif
                @if (session("error"))
                    <div class="alert alert-danger">
                        {{session("error")}}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('storeLogin') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" placeholder="Unesite email adresu" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" name="password" placeholder="Unesite svoju sifru" class="form-control">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection