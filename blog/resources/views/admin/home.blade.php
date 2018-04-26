<?php use App\Http\Controllers\Admin\HomeController;
use App\Model\user\cateogeries;
use App\Model\user\member;
use App\Model\user\post;

 ?>
 
@extends('admin/layouts/app')


@section('content')


<div class="wrapper row-offcanvas row-offcanvas-left" style="min-height: 590px;">
       
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <section class="content">
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php 
                                        $object=new HomeController();
                                        $cateogery=new cateogeries();
                                        $object->count( $cateogery);
                                        ?>
                                    </h3>
                                    <p>
                                        Total Cateogeries
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{url('admin/cateogery')}}" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php 
                                        $object=new HomeController();
                                        $post=new post();
                                        $object->count( $post);
                                        ?>
                                    </h3>
                                    <p>
                                        Total Posts
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{url('admin/post')}}" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php 
                                        $object=new HomeController();
                                        $member=new member();
                                        $object->count( $member);
                                        ?>
                                    </h3>
                                    <p>
                                        User Registrations
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="{{url('admin/member/show')}}" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                      

            </aside><!-- /.right-side -->
     


@endsection()