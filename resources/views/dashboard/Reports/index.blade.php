@extends('dashboard.layouts.master')

@section("extracss")
    <link rel="stylesheet" href="{{url('/')}}/dashboard/assets/css/report.css">
@endsection

<!--Main Navigation-->

@section("main")
<div class="col-12 col-md-10">
    <div class="container-fluid p-0">
        <div class="row">
            <main class="col-12 col-md-12">
                @include('dashboard.extras.pageSettings')
                <section id="mainForm">
                    <section class="formTitle">
                        <h1 class="mb-0 text-center">
                            <strong>{{__("نمایش گزارش")}}</strong>
                        </h1>
                    </section>
                    <section class="my-4">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="firstChart"></canvas>
                            </div>
                        </div>
                    </section>
                    <section class="my-4">
                        <div class="comtainer-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="p-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <canvas id="secChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="p-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <canvas id="thirdChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="my-4">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="forthChart"></canvas>
                            </div>
                        </div>
                    </section>
                    <section class="my-4">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="fifthChart"></canvas>
                            </div>
                        </div>
                    </section>
                </section>
            </main>
        </div>
    </div>
</div>
@endsection

@section("extrajs")
<script src="{{url('/')}}/dashboard/assets/js/chart.js"></script>
<script src="{{url('/')}}/dashboard/assets/js/chart.umd.js"></script>
<script src="{{url('/')}}/dashboard/assets/js/report.js"></script>

@endsection