@extends('layout.mainUser')

@section('judul')
DASHBOARD
@endsection

@section('content')
<div class="callout callout-info">
    <h5><i class="fas fa-info"></i> Result:</h5>
    <?php
    if ($result['Hasil'] == 0) {
        echo "Tidak ADHD";
    } else if ($result['Hasil'] == 1) {
        echo "Inattention";
    } else if ($result['Hasil'] == 2) {
        echo "Impulsif";
    } else {
        echo "Hyperactivity";
    }
    ?>
</div>
<br>
<form action="{{url('user/predict')}}">
    <button type="submit" class="btn btn-block btn-dark">Back</button>
</form>
@endsection