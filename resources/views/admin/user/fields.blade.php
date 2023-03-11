@if ($action == 'edit')
    @include('components.input', [
        'type' => 'text',
        'name' => 'name',
        'label' => 'Role Name',
        'type' => 'text',
        'value' => $role->name ?? '',
        'required' => true,
    ])
@else
    @include('components.input', [
        'type' => 'text',
        'name' => 'username',
        'label' => 'Username',
        'required' => true,
    ])

    <div class="form-group">
        <label>Role</label>
        <select class="select2 w-100" multiple="multiple">
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
    </div>
@endif
