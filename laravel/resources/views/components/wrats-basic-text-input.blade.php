@props(['id' => '', 'label' => 'Test Label', 'defaultValue' => ''])

<div class="form-floating input-component">
    <input
        type="text"
        class="form-control form-styles basic-text-input"
        id="{{ $id }}"
        value="{{ $defaultValue }}"
        {{ $attributes }}
    />
    <label for="{{ $id }}" class="input-label">{{ $label }}</label>
</div>
