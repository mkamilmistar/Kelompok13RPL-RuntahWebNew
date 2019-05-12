@extends('admin.layouts.master')
@section('title')
Dashboard Admin
@endsection
@section('judulbesar')
Dashboard
@endsection
@section('judulkecil')
Dashboard
@endsection
@section('content')

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{$join->count()}}</h3>

                <p>Event Selesai</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-checkmark-circle"></i>
            </div>
            <a href="/admins/event" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{$point->count()}}</h3>

                <p>Get Reward</p>
            </div>
            <div class="icon">
                <i class="ion ion-trophy"></i>
            </div>
            <a href="/admins/index" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{$users->count()}}</h3>

                <p>User Volunteer</p>
            </div>
            <div class="icon">
                <i class="ion ion-person"></i>
            </div>
            <a href="/admins/index" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{$event->count()}}</h3>

                <p>Event Found</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-paper"></i>
            </div>
            <a href="/admins/event" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
@endsection