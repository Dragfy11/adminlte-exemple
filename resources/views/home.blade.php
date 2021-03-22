@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fas fa-download"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Downloads</span>
                  <span class="info-box-number">114,381</span>
    
                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">
                        70% Increase in 30 Days
                      </span>
                </div>
                <!-- /.info-box-content -->
              </div>
        </div>
    </div>
@stop
