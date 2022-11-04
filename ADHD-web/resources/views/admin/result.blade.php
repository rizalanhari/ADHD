@extends('layout.main')

@section('judul')
DASHBOARD
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Result</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <?php foreach ($result as $eachdata) { ?>
                                    <?php $count = count($eachdata) ?>
                                <?php } ?>
                                <th></th>
                                <?php for ($i = 1; $i < $count; $i++) { ?>
                                    <th><?php echo $i ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $countT = 1 ?>
                            <?php foreach ($result as $eachdata) { ?>
                                <?php $acc = $eachdata['acc'] ?>
                                <tr>
                                    <?php if ($countT < 2) { ?>
                                        <td>Hasil Klasifikasi</td>
                                    <?php } else { ?>
                                        <td>Nilai Seharusnya</td>
                                    <?php } ?>
                                    <?php for ($i = 1; $i < $count; $i++) { ?>
                                        <td><?php echo $eachdata['data ' . $i] ?></td>
                                    <?php } ?>
                                </tr>
                                <?php $countT++ ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<div class="callout callout-info">
    <h5><i class="fas fa-info"></i> Accuracy:</h5>
    <?php echo $acc ?>
</div>
<br>

<form action="{{url('predict')}}">
    <button type="submit" class="btn btn-block btn-dark">Back</button>
</form>
@endsection