@extends('layouts.app')

@section('content')

    <div class="container" style="padding: 20% 0;">
        <div class="row">

            <form action="{{ route('gallery.massstore') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="images">Images</label>
                    <input type="file" class="form-control" name="images[]" id="images" multiple>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" id="type" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Send</button>
            </form>

        </div>
    </div>

@endsection
