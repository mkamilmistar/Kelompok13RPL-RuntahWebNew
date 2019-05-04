@extends('sites.layouts.master')
@section('title')
Report - Runtah WEB
@endsection

@section('content')
<!-- ##### Catagory Area Start ##### -->
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{asset('/sites')}}/img/bg-img/bg0.jpg);">
    <div class="blog-details-headline">
        <h3>Report Runtah Web</h3>
        <div class="meta d-flex align-items-center justify-content-center">
            <a href="/">Iye13</a>
            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
            <a href="/">Volunteer &amp; Non-Profit</a>
        </div>
    </div>
</div>
<!-- ##### Catagory Area End ##### -->

<!-- ##### Blog Details Content ##### -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <form action="{{ route('postreport') }}" class="class" method="post">
                        {{csrf_field()}} 
                            <div class="form-group">
                                <label for="">Report</label>
                                <textarea class="form-control" name="report" rows="5" placeholder="Post report"> </textarea>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Publish" class="btn btn-primary">
                            </div>
                 </form>
            </div>
        </div>
    </div>
</div>
@endsection