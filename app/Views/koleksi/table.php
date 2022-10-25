<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
            crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            crossorigin="anonymous"></script>
<script src="http://cdn.jsdeliver.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/agoenxz2186/submitAjax@develop/submit_ajax.js">
            </script>
<link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<table id='table-pelanggan' class="datatable table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Aksi</th>
        </tr>
    </thead>
</table>

<script>
    $(document).ready(function(){
        $('table#table-pelanggan').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: "<?=base_url('koleksi/all')?>",
                method: 'GET'
            },
            colums: [
                { data: 'id', sortable:false, searchable:false,
                  render: (data,type,row)=>{
                    return meta.settings._iDisplayStar + meta.row + 1;
                  }
                },
                { data: 'nama' },
                { data: 'email' },
                { data: 'gender' ,
                  render: (data, type, meta, row)=>{
                    if( data === 'L'){
                        return 'Laki-laki';
                    }else if( data === 'P'){
                        return 'Perempuan';
                    }
                    return data;
                  }
                },
                { data: 'id',
                  render: (data, type, meta, row)=>{
                    var btnEdit = `<'button class='btn-edit' data-id='${data}>`
                  }
                }
            ]
        });
    });
</script>