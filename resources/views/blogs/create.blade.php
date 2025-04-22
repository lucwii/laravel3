@extends("layout/public")

@section("title")
Blog create stranica
@endsection

@section("content")

@if(session("error"))
    <div class="alert alert-danger">
        {{session("error")}}
    </div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">Naslov</label>
                        <input type="text" class="form-control" name="naslov">
                    </div>
                    <div class="mb-3">
                        <label for="">Sadrzaj</label>
                        <textarea name="sadrzaj" class="form-control" rows="10" id=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add blog</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

