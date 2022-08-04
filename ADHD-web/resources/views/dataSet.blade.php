@extends('template')

@section('content')

<div>
    <div class="col-xs-12">
        <table class="table table-bordered table-hover dt-responsive">
            <thead>
                <tr>
                    <th> No </th>
                    <?php foreach ($shippingItem as $key => $value) { ?>
                        <th> <?php echo $i ?> </th>
                    <?php } ?>
                    <th> Hasil </th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</div>
<script>
    $('table').DataTable();
</script>
@endsection