@extends('layout.main')

@section('judul')
PREDICT
@endsection

@section('content')
<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">Backpropagation</h3>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ url('/predict/post') }}">
            @csrf
            <div class="form-group">
                <label for="customRange1">Jumlah Data Train</label>
                <input type="range" min="1" max="80" value="80" class="custom-range" id="customRange1" name="train" required>
                <p>Value: <span id="customRange1Value"></span></p>
            </div>
            <div class="form-group">
                <label for="customRange2">Jumlah Data Test</label>
                <input type="range" min="1" max="20" value="20" class="custom-range custom-range-danger" id="customRange2" name="test" required>
                <p>Value: <span id="customRange2Value"></span></p>
            </div>
            <div class="input-group mb-3">
                <input type="number" step="0.01" class="form-control" name="lrate" required>
                <div class="input-group-append">
                    <span class="input-group-text">Learning Rate</span>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="number" class="form-control" name="neuronh" required>
                <div class="input-group-append">
                    <span class="input-group-text">Neuron Hidden</span>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

</div>
@endsection