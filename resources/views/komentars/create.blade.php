@extends("layout/public")

@section("title")
Komentar create stranica
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
                        <label for="">Izaberite za koj blog zelite da dodate komentar</label>
                        <select name="blog_id" class="form-control" id="">
                        @foreach($blogovi as $blog) 
                            <option value="{{ $blog->id }}">{{$blog->naslov}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Dodaj sadrzaj komentara</label>
                        <textarea name="komentar" rows="10" class="form-control" id=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add comment</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

