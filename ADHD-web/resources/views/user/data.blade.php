@extends('layout.mainUser')

@section('judul')
Data
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Train</h3>
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
                                <th>No</th>
                                <?php for ($i = 1; $i <= 45; $i++) { ?>
                                    <th> Gejala_<?php echo $i; ?> </th>
                                <?php }  ?>
                                <th>Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($dataTrain as $eachData) {
                                // dd($eachData);
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $count ?>
                                    </td>
                                    <?php for ($i = 1; $i <= 45; $i++) {
                                        // dd($eachData);
                                    ?>
                                        <td>
                                            <?php
                                            echo $eachData['Pertanyaan' . $i]
                                            ?>
                                        </td>
                                    <?php }  ?>
                                    <td>
                                        <?php
                                        if ($eachData['Hasil'] == 0) {
                                            echo "Tidak ADHD";
                                        } else if ($eachData['Hasil'] == 1) {
                                            echo "Inattention";
                                        } else if ($eachData['Hasil'] == 2) {
                                            echo "Impulsif";
                                        } else {
                                            echo "Hyperactivity";
                                        }
                                        ?>
                                    </td>

                                </tr>
                            <?php
                                $count++;
                            }
                            ?>
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
@endsection