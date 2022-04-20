@if($translated)
    <a17-locale
        type="a17-textfield"
        :attributes="{
            label: '{{ $label }}',
            @include('twill::partials.form.utils._field_name', ['asAttributes' => true])
            type: '{{ $type }}',
            @if ($required) required: true, @endif
            @if ($note) note: '{{ $note }}', @endif
            @if ($placeholder) placeholder: '{{ $placeholder }}', @endif
            @if ($maxlength) maxlength: {{ $maxlength }}, @endif
            @if ($disabled) disabled: true, @endif
            @if ($readOnly) readonly: true, @endif
            @if ($rows) rows: {{ $rows }}, @endif
            @if ($prefix) prefix: '{{ $prefix }}', @endif
            @if ($inModal) inModal: true, @endif
            @if ($default)
                initialValue: '{{ $default }}',
                hasDefaultStore: true,
            @endif
            inStore: 'value'
        }"
        @if ($ref) ref="{{ $ref }}" @endif
        @if ($onChange) v-on:change="{{ $onChange }}{{ $onChangeFullAttribute }}" @endif
    ></a17-locale>
@else
    <a17-textfield
        label="{{ $label }}"
        @include('twill::partials.form.utils._field_name')
        type="{{ $type }}"
        @if ($required) :required="true" @endif
        @if ($note) note="{{ $note }}" @endif
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        @if ($maxlength) :maxlength="{{ $maxlength }}" @endif
        @if ($disabled) disabled @endif
        @if ($readOnly) readonly @endif
        @if ($rows) :rows="{{ $rows }}" @endif
        @if ($ref) ref="{{ $ref }}" @endif
        @if ($onChange) v-on:change="{{ $onChange }}{{ $onChangeFullAttribute }}" @endif
        @if ($prefix) prefix="{{ $prefix }}" @endif
        @if ($inModal) :in-modal="true" @endif
        @if ($default)
            :initial-value="'{{ $default }}'"
            :has-default-store="true"
        @endif
        in-store="value"
    ></a17-textfield>
@endif

@unless($renderForBlocks || $renderForModal)
@push('vuexStore')
    @include('twill::partials.form.utils._translatable_input_store')
@endpush
@endunless
