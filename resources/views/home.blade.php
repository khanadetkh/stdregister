@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ระบบรับสมัครนักเรียน') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="container">
                        <h3><a href="#">สมัครเรียนชั้นมัธยมศึกษาปีที่ 1</a></h3>
                    </div>

                    <div class="container">
                        <h3><a href="#">สมัครเรียนชั้นมัธยมศึกษาปีที่ 4</a></h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection