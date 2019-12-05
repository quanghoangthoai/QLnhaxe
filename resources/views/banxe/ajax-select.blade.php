@if(!empty($banxeajax))
    @foreach($banxeajax as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
    @endforeach
@endif
