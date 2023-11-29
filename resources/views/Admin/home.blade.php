@extends('layouts.main')
@section('yield', 'Dashboard')
@section('content')


<div class="row">
  <div class="col-md-12">

  </div>
</div>
<div class="row m-t-25">
    {{-- @can('View Product Variation') --}}
    @if(isset($specificRole1))
    <a href="{{route('user')}}" class="col-sm-6 col-lg-3">
      <div class="overview-item overview-item--c1">
        <div class="overview__inner">
          <div class="overview-box clearfix">
            <div class="icon">
              <i class="zmdi zmdi-account"></i>
            </div>
            <div class="text">

              <h2>{{$specificRole1}}</h2>
             
              <span>Agents</span>
            </div>
          </div>
          <div class="overview-chart">
            <!-- <canvas id="widgetChart4"></canvas> -->
          </div>
        </div>
      </div>
    </a>
      @else
      <h2></h2>

    @endif

    {{-- @endcan --}}

    {{-- @can('View Product Variation') --}}
    @if(isset($specificRole2))
    <a href="{{route('user')}}" class="col-sm-6 col-lg-3">
      <div class="overview-item overview-item--c3">
        <div class="overview__inner">
          <div class="overview-box clearfix">
            <div class="icon">
              <i class="zmdi zmdi-account"></i>
            </div>
            <div class="text">
              <h2>{{$specificRole2}}</h2>
             
              <span>Vendors</span>
            </div>
          </div>
          <div class="overview-chart">
            <!-- <canvas id="widgetChart4"></canvas> -->
          </div>
        </div>
      </div>
    </a>
    @else
    <h2></h2>

    @endif
  {{-- @endcan --}}

    {{-- @can('View Product Variation') --}}
    @if(isset($specificRole3))
    <a href="{{route('user')}}" class="col-sm-6 col-lg-3">
      <div class="overview-item overview-item--c1">
        <div class="overview__inner">
          <div class="overview-box clearfix">
            <div class="icon">
              <i class="zmdi zmdi-account"></i>
            </div>
            <div class="text">
              <h2>{{$specificRole3}}</h2>
             
              <span>Support</span>
            </div>
          </div>
          <div class="overview-chart">
            <!-- <canvas id="widgetChart4"></canvas> -->
          </div>
        </div>
      </div>
    </a>
    @else
    <h2></h2>

    @endif
    {{-- @endcan --}}

    @can('View Order')
    <div class="col-sm-6 col-lg-3">
      <div class="overview-item overview-item--c2">
        <div class="overview__inner">
          <div class="overview-box clearfix">
            <div class="icon">
              <i class="zmdi zmdi-calendar-note"></i>
            </div>
            <div class="text">
              <h2>{{$orders}}</h2>
              <span>Orders</span>
            </div>
          </div>
          <div class="overview-chart">
            <!-- <canvas id="widgetChart3"></canvas> -->
          </div>
        </div>
      </div>
    </div>
    @endcan

  @can('View User')
  <a href="{{route('user')}}" class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c2">
      <div class="overview__inner">
        <div class="overview-box clearfix">
          <div class="icon">
            <i class="zmdi zmdi-accounts-outline"></i>
          </div>
          <div class="text">
            <h2>{{$user_count}}</h2>
            <span>Users</span>
          </div>
        </div>
        <div class="overview-chart">
          <!-- <canvas id="widgetChart1"></canvas> -->
        </div>
      </div>
    </div>
  </a>
  @endcan
  @can('View Product')
  <a href="{{route('product_index')}}" class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c1">
      <div class="overview__inner">
        <div class="overview-box clearfix">
          <div class="icon">
            <i class="zmdi zmdi-shopping-cart"></i>
          </div>
          <div class="text">
            <h2>{{$product_count}}</h2>
            <span>Products</span>
          </div>
        </div>
        <div class="overview-chart">
          <!-- <canvas id="widgetChart2"></canvas> -->
        </div>
      </div>
    </div>
  </a>
  @endcan
  <?php
  // dd($variation_count); ?>
  <!--@can('View Product Variation')-->
  <!--<a href="{{route('productvariation')}}" class="col-sm-6 col-lg-3">-->
  <!--  <div class="overview-item overview-item--c4">-->
  <!--    <div class="overview__inner">-->
  <!--      <div class="overview-box clearfix">-->
  <!--        <div class="icon">-->
  <!--          <i class="zmdi zmdi-redo"></i>-->
  <!--        </div>-->
  <!--        <div class="text">-->
  <!--          <h2></h2>-->
  <!--          <span>Variations</span>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      <div class="overview-chart">-->
          <!-- <canvas id="widgetChart4"></canvas> -->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</a>-->
  <!--@endcan-->

</div>

@endsection