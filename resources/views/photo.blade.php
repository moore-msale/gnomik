@extends('layouts.app')

@section('content')
    <form action="/photo" method="POST" style="padding: 20%;" enctype="multipart/form-data">
        @csrf
        <select multiple data-role="tagsinput" name="tags[]">
        </select>
        <button type="submit">Submit</button>
    </form>
@stop

@push('styles')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ secure_asset('css/tagsinput.css') }}">
@endpush

@push('scripts')
    <script src="{{ secure_asset('js/tagsinput.js') }}"></script>
@endpush
