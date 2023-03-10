<script>
    $(document).ready(function() {
        const table = $('#role-table');
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
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'guard_name',
                    name: 'guard_name'
                },
                {
                    data: 'permissions',
                    name: 'permissions',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ],
            // columnDefs: [
            //     { 
            //         width: 300, 
            //         targets: 2 
            //     }
            // ],
            // fixedColumns: true
        });
    });
</script>
