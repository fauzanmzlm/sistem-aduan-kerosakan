<script>
    $(document).ready(function() {
        const table = $('#user-table');
        table.DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: $(this).data('url'),
                data: function (d) {
                    d.page = table.DataTable().page.info().page + 1;
                    return d;
                }
            },
            columns: [
                // {
                //     data: null,
                //     render: function (data, type, row, meta) {
                //         return meta.row + meta.settings._iDisplayStart + 1;
                //     },
                //     orderable: false,
                //     searchable: false
                // },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'role',
                    name: 'role'
                },
                {
                    data: 'account_status',
                    name: 'account_status'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'updated_at',
                    name: 'updated_at'
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
