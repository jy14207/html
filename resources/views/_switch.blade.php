
<div class="form-group ">
    <!-- Rounded switch -->
    <label class="switch">
        <input type="checkbox" {{ isset($value) and $value==true ? "checked" : ""    }}
        id="{{ $name }}" name="{{ $name }}">
        <span class="slider round"></span>
    </label>
    <label for="{{ $name }}"
           class=" col-form-label text-md-right">{{ $label ?? "" }}</label>
</div>