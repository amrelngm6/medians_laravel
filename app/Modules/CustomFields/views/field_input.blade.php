
<div class="form-group w-full select-placeholder">
    <label for="field-{{$field->name}}" class="{{$field->is_required ? 'required' : ''}}  control-label"
        rel="popover" data-trigger="hover"
        data-content="Check this option if this field is Disabled and readonly "
        >{{$field->title}} {!! $field->help_text ? '<i class="bx bx-help-circle"></i>' : '' !!}
    </label>
    @if ($field->type == 'checkbox')
    <div class="form-group w-full flex">
        @if ($field->options)
        @foreach (explode(',', str_replace(' ','', $field->options)) as $option)
        <label class="form-check form-check-custom form-check-solid me-10">
            <input {{$field->is_required ? 'required' : ''}} {{$field->is_disabled ? 'disabled' : ''}} name="custom_field[{{$field->name}}][]" {{$option == ($currentVal ?? $field->default_value) ? 'checked' : ''}} class="form-check-input h-20px w-20px" value="{{$option}}" type="checkbox" />
            <span class="form-check-label fw-semibold"> {{$option}} </span>
        </label>
        @endforeach
        @endif
    </div>
    @elseif ($field->type == 'radio')
    <div class="form-group w-full flex">
        @if ($field->options)
        @foreach (explode(',', str_replace(' ','', $field->options)) as $option)
        <label class="form-check form-check-custom form-check-solid me-10">
            <input {{$field->is_required ? 'required' : ''}} {{$field->is_disabled ? 'disabled' : ''}} name="custom_field[{{$field->name}}]" {{$option == ($currentVal ?? $field->default_value) ? 'checked' : ''}} class="form-check-input h-20px w-20px" value="{{$option}}" type="radio" />
            <span class="form-check-label fw-semibold"> {{$option}} </span>
        </label>
        @endforeach
        @endif
    </div>
    @elseif ($field->type == 'textarea')
    <textarea id="about" {{$field->is_required ? 'required' : ''}} {{$field->is_disabled ? 'disabled' : ''}} name="custom_field[{{$field->name}}]" class="{{$field->class}}" rows="4">{{$currentVal ?? ''}}</textarea>
    @elseif (in_array($field->type, ['select', 'multiselect']) )
    <select {{$field->is_required ? 'required' : ''}} {{$field->is_disabled ? 'disabled' : ''}} name="custom_field[{{$field->name}}]{{($field->type == 'multiselect') ? '[]' : ''}}" id="field-{{$field->name}}" {{($field->type == 'multiselect') ? 'multiple' :''}}
        class="{{$field->class}} py-2 select-bootstrap">
        @if ($field->options)
            @foreach (explode(',', str_replace(' ','', $field->options)) as $option)
            <option value="{{$option}}" {{ in_array($option, explode(',', $currentVal ?? $field->default_value)) ? 'selected' : ''}} >{{$option}}</option>
            @endforeach
        @endif
    </select>
    @elseif ($field->type == 'date')
    <input  type="text" 
        id="{{$field->name}}" 
        value="{{$currentVal ?? $field->default_value}}" 
        placeholder="{{$field->placeholder}}"
        name="custom_field[{{$field->name}}]" 
        {{$field->is_disabled ? 'disabled' : ''}}
        {{$field->is_required ? 'required' : ''}}
        class=" {{$field->class}}">
    @else
    <input type="{{$field->type}}" 
        id="{{$field->name}}" 
        value="{{$currentVal ?? $field->default_value}}" 
        placeholder="{{$field->placeholder}}"
        name="custom_field[{{$field->name}}]" 
        {{$field->is_disabled ? 'disabled' : ''}}
        {{$field->is_required ? 'required' : ''}}
        class=" {{$field->class}}">
    @endif
</div>
