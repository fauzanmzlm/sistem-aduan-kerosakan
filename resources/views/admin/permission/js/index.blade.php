<script>
    $(document).ready(function() {
        const table = $('#permission-table');
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
                {
                    data: null,
                    sortable: false, 
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    } 
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'guard_name',
                    name: 'guard_name'
                },
            ]
        });
    });
</script>
