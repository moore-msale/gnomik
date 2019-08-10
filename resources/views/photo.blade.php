@extends('layouts.app')

@section('content')
    <form action="/photo" method="POST" style="padding: 20%;" enctype="multipart/form-data">
        @csrf
        <select class="tagsinput" data-role="tagsinput" name="tags[]" multiple>
        </select>
        <button type="submit">Submit</button>
    </form>
@stop

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/tagsinput.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/tagsinput.min.js') }}"></script>
    <script>
        $('.tagsinput').tagsinput();
    </script>
@endpush