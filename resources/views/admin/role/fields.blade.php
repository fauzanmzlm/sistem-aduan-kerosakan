
@if ($action == "edit")

    @include('components.input', [
        'type' => 'text',
        'name' => 'name',
        'label' => 'Name',
        'type' => 'text',
        'value' => $department->name ?? '',
        'required' => true,
    ])

    @include('components.input', [
        'type' => 'text',
        'name' => 'short_name',
        'label' => 'Short Name',
        'type' => 'text',
        'value' => $department->short_name ?? '',
        'required' => true,
    ])

    @include('components.input', [
        'type' => 'text',
        'name' => 'code',
        'label' => 'Code',
        'type' => 'text',
        'value' => $department->code ?? '',
        'required' => true,
    ])
    
    @include('components.input', [
        'type' => 'select',
        'name' => 'status',
        'label' => 'Status',
        'value' => $department->status ?? '',
        'required' => true,
        'options' => $statusOptions
    ])

@else

    @include('components.input', [
        'type' => 'text',
        'name' => 'name',
        'label' => 'Role Name',
        'type' => 'text',
        'value' => $department->name ?? '',
        'required' => true,
    ])

    @include('components.input', [
        'type' => 'text',
        'name' => 'short_name',
        'label' => 'Short Name',
        'type' => 'text',
        'value' => $department->name ?? '',
        'required' => true,
    ])

    @include('components.input', [
        'type' => 'text',
        'name' => 'code',
        'label' => 'Code',
        'type' => 'text',
        'value' => $department->name ?? '',
        'required' => true,
    ])

@endif


