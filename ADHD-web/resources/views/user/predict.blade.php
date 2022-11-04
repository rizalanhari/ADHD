@extends('layout.mainUser')

@section('judul')
PREDICT
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>


    <form method="POST" action="{{ url('/user/predict/post') }}">
        <div class="card-body">
            <div class="form-group">
                @csrf
                <?php $count = 1; ?>
                <?php foreach ($data as $eachdata) { ?>
                    <?php foreach ($eachdata as $value) { ?>
                        <label>Pertanyaan Ke-<?php echo $count ?>:</b> <?php print($value) ?> </label>
                    <?php } ?>
                    <div class="custom-control custom-radio">
                        <input class="form-check-input" type="radio" name="pertanyaan<?php echo $count - 1 ?>" value="15" required>
                        <label class="form-check-label">Tidak Pernah</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="form-check-input" type="radio" name="pertanyaan<?php echo $count - 1 ?>" value="35">
                        <label class="form-check-label">Kadang-Kadang</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="form-check-input" type="radio" name="pertanyaan<?php echo $count - 1 ?>" value="50">
                        <label class="form-check-label">Selalu</label>
                    </div>
                    <br>
                    <?php $count++ ?>
                <?php } ?>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection