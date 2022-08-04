@extends('template')

@section('content')

<div>
    <div class="col-xs-12">
        <?php
        foreach ($data as $eachData) { ?>
            <table class="table table-bordered table-hover dt-responsive">
                <thead>
                    <tr>
                        <th> pertanyaan </th>
                        <th> nilai </th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($eachData as $key => $value) { ?>
                        <?php //dd($key, $value); 
                        ?>
                        <tr>
                            <td><?php echo $key ?></td>
                            <td><?php echo $value ?></td>
                        </tr>
                    <?php } ?>


                </tbody>
                <tfoot>

                </tfoot>
            </table>
        <?php } ?>
    </div>
</div>
<script>
    var table = $('table').DataTable();
</script>
@endsection