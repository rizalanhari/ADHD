@extends('layout.main')

@section('judul')
DASHBOARD
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Home Admin</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-8">
                <div class="col-110">
                    <img src="{{ asset('/') }}dist/img/adhd.jpg" class="product-image" alt="Product Image">
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection