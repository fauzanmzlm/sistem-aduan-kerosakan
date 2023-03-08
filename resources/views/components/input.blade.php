<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    @if ($type == 'text')
        <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}"{{ isset($required) && $required ? ' required' : '' }}>
    @elseif ($type == 'email')
        <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}"{{ isset($required) && $required ? ' required' : '' }}>
    @elseif ($type == 'password')
        <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}"{{ isset($required) && $required ? ' required' : '' }}>
    @elseif ($type == 'number')
        <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}"{{ isset($required) && $required ? ' required' : '' }}>
    @elseif ($type == 'textarea')
        <textarea class="form-control @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}"{{ isset($required) && $required ? ' required' : '' }}>{{ old($name, $value) }}</textarea>
    @elseif ($type == 'checkbox')
        <div class="form-check">
            <input class="form-check-input" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}"{{ isset($required) && $required ? ' required' : '' }}>
            <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>
        </div>
    @elseif ($type == 'select')
        <select class="form-control text-capitalize @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}"{{ isset($required) && $required ? ' required' : '' }}>
            <option value="">-- Select --</option>
            @foreach ($options as $optionValue => $optionLabel)
                <option value="{{ $optionValue }}"{{ old($name) == $optionValue || $value == $optionValue ? ' selected' : '' }}>{{ $optionLabel }}</option>
            @endforeach
        </select>
    @endif

    @if ($errors->has($name))
        <div class="invalid-feedback">{{ $errors->first($name) }}</div>
    @endif
</div>





{{-- @if(isset($horizontal) && $horizontal)
    <div class="form-group row">
        <label for="{{ $name }}" class="col-sm-2 col-form-label">{{ $label }}</label>
        <div class="col-sm-10">
            @include('components.input', [
                'type' => $type,
                'name' => $name,
                'label' => null,
                'value' => $value,
                'required' => $required ?? false,
            ])
        </div>
    </div>
@else
    <div class="form-group">
        <label for="{{ $name }}">{{ $label }}</label>
        @include('components.input', [
            'type' => $type,
            'name' => $name,
            'label' => null,
            'value' => $value,
            'required' => $required ?? false,
        ])
    </div>
@endif --}}