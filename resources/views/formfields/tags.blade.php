<input type="tags"
       class="form-control"
       name="{{ $row->field }}"
       data-name="{{ $row->display_name }}"
       @if($row->required == 1) required @endif
       placeholder="{{ isset($options->placeholder)? old($row->field, $options->placeholder): $row->display_name }}"
       value="@if(isset($dataTypeContent->{$row->field})){{ old($row->field, $dataTypeContent->{$row->field}) }}@else{{old($row->field)}}@endif">

@push('javascript')
    <link rel="stylesheet" href="{{ asset('css/tags-input.css') }}">
    <script src="{{ asset('js/tags-input.js') }}"></script>
    <script>[].forEach.call(document.querySelectorAll('input[type="tags"]'), tagsInput);</script>
@endpush