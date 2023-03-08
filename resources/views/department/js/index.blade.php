<script>
    $(document).ready(function() {
        $('#department-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('departments.index') }}",
                data: function (d) {
                    d.page = $('#department-table').DataTable().page.info().page + 1;
                    return d;
                }
            },
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'short_name',
                    name: 'short_name'
                },
                {
                    data: 'code',
                    name: 'code'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    });
</script>
