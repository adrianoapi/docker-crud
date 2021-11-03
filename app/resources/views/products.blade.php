<html>
<head>
    <title>Laravel 8 Datatables Filter with Dropdown - websolutionstuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

</head>
<body>

<div class="container">
    <h1>LFiltro</h1>

    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label><strong>Approved :</strong></label>
                <select id='approved' class="form-control" style="width: 200px">
                    <option value="">Approved</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
        </div>
    </div>

    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Amount</th>
                <th width="100px">Approved</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

</body>

<script type="text/javascript">
  $(function () {

    $('.data-table thead tr').clone(true).appendTo( '.data-table thead' );
    $('.data-table thead tr:eq(0) th').each( function (i) {
        //var title = $(this).text();
        //$(this).html( '<input type="text" placeholder="Search '+title+'" style="width:100%" />' );
        var title = $('.data-table thead th').eq($(this).index() ).text();
        if($(this).index() !=3 && $(this).index() !=0) $(this).html( '<input type="text" placeholder="Search '+title+'"  class="form-control" />' );
        if($(this).index() ==0) $(this).html( '' );
        if($(this).index() ==3) $(this).html( '' );

        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: "{{ route('products.index') }}",
          data: function (d) {
                d.approved = $('#approved').val(),
                d.search = $('input[type="search"]').val()
            }
        },
        columns: [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'amount', name: 'amount'},
            {data: 'approved', name: 'approved', 'orderable': false},
        ],
        deferRender: true,
        scrollY: 500,
        scrollCollapse: true
    });

    $('#approved').change(function(){
        table.draw();
    });

  });
</script>
</html>
