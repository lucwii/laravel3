@extends("layout/public")

@section("title")
    Provera za brisanje bloga
@endsection

@section("content")
    <div class="row justify-content-center">
        <div class="col-md-6 text-center ">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Delete blog post
                    </h5>
                </div>
                <div class="card-body">
                    <p>Da li ste sigurni da zelite da obirsete blog?</p>
                    <form action="{{ route('blog.delete', $id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger">
                            Obrisi blog
                        </button>
                        <a href="{{ route('blog.list') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection