@php
if (!isset($reset)) {
    $reset = true;
}
@endphp

<div class="form-group">
    <button type="submit" class="btn btn-success btn-sm">Update</button>
    @if ($reset)
        <button type="reset" id="btn-reset" class="btn btn-warning btn-sm">Reset</button>
    @endif
</div>
