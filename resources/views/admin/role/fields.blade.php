
@if ($action == "edit")

    @include('components.input', [
        'type' => 'text',
        'name' => 'name',
        'label' => 'Role Name',
        'type' => 'text',
        'value' => $role->name ?? '',
        'required' => true,
    ])

    <div class="form-group">
        <label class="font-weight-bold">Permissions</label>
        @foreach ($permissions as $permission)
        <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label" for="check-{{ $permission->id }}">
                <input type="checkbox" class="form-check-input" name="permissions[]" value="{{ $permission->name }}" id="check-{{ $permission->id }}" @if($role->permissions->contains($permission)) checked @endif>
                {{ $permission->name }}
            </label>
        </div>
        @endforeach
    </div>

@else

    @include('components.input', [
        'type' => 'text',
        'name' => 'name',
        'label' => 'Role Name',
        'type' => 'text',
        'value' => $role->name ?? '',
        'required' => true,
    ])

    <div class="form-group">
        <label class="font-weight-bold">Permissions</label>
        @foreach ($permissions as $permission)
        <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label" for="check-{{ $permission->id }}">
                <input type="checkbox" class="form-check-input" name="permissions[]" value="{{ $permission->name }}" id="check-{{ $permission->id }}">
                {{ $permission->name }}
            </label>
        </div>
        @endforeach
    </div>

@endif


