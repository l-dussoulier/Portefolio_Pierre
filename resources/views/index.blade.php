@extends("template")

@section('page-title')
    Bienvenue
@endsection

@section('additionnal-stylesheets')
    <link rel="stylesheet" href="">
@endsection

@section("page-content")
    <h3>blablablabla</h3>
    <strong>{{$test}}</strong>
    <form action="{{ route("submit") }}" method="POST">
        @csrf
        <input type="text" name="test">
        <button type="submit">Submit</button>
    </form>
@endsection


@section("additionnal-javascripts")
    <script></script>
@endsection
