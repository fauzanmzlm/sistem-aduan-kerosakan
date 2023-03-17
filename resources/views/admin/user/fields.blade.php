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

    <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6">

        </div>
    </div>
    <div class="row">
        <div class="col-6">
            {{-- Username --}}
            @include('components.input', [
                'type' => 'text',
                'name' => 'username',
                'label' => 'Username',
                // 'required' => true,
            ])
        </div>
        <div class="col-6">
            {{-- Identity Card Number --}}
            @include('components.input', [
                'type' => 'text',
                'name' => 'identity_card_number',
                'label' => 'Identity Card Number',
                // 'required' => true,
            ])
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            {{-- Email --}}
            @include('components.input', [
                'type' => 'email',
                'name' => 'email',
                'label' => 'Email',
                // 'required' => true,
            ])
        </div>
        <div class="col-6">
            {{-- Department/Unit --}}
            @include('components.input', [
                'type' => 'select',
                'name' => 'department',
                'label' => 'Department',
                // 'required' => true,
                'options' => $departmentOptions
            ])
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            {{-- First Name --}}
            @include('components.input', [
                'type' => 'text',
                'name' => 'first_name',
                'label' => 'First Name',
                // 'required' => true,
            ])
        </div>
        <div class="col-6">
            {{-- Last Name --}}
            @include('components.input', [
                'type' => 'text',
                'name' => 'last_name',
                'label' => 'Last Name',
                // 'required' => true,
            ])
        </div>
    </div>
    {{-- Role --}}
    @include('components.input', [
        'type' => 'select',
        'name' => 'role',
        'label' => 'Role',
        // 'required' => true,
        'options' => $roleOptions,
        'select2' => true,
    ])
    {{-- <div class="form-group">
        <label>Role</label>
        <select name="role" id="role" class="form-control select2 w-100" multiple="multiple">
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
    </div> --}}
@endif
