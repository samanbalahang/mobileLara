@extends('dashboard.layouts.master')
@section("extracss")
<link rel="stylesheet" href="{{url('/')}}/dashboard/assets/css/datatables.min.css">
<link rel="stylesheet" href="{{url('/')}}/dashboard/assets/css/datatable-init.css">

@endsection

@section("main")
<div class="col-12 col-md-10">
    <main>
        @include('dashboard.extras.pageSettings')
        @if(isset($_GET['message']))
        <div class="alert btn-primary text-white alert-dismissible fade show" role="alert">
          <strong>{{$_GET['message']}}</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        @endif
        <section id="mainForm">
            <section class="formTitle  d-flex justify-content-between">
                <h1>
                    محصولات
                </h1>
                <a href="{{route('products.create')}}" class="btn btn-success p-3">ایجاد محصول</a>
            </section>
            <section class="addbtn my-3">
                <table class="datatable tablerout table-light-grid">
                    <thead>
                        <tr>
                            <th class="nosearch">title</th>
                            <th>آدرس</th>
                            <th>عنوان</th>
                            <th>توضیحات</th>
                            <th class="nosearch">مدیریت مطالب</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($allpruduct))
                            @foreach($allpruduct as $product)
                                <tr>
                                    <td></td>
                                    <td>{{$product->uri}}</td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->post_desc}}</td>
                                    <td>
                                        <a href="#" class="btn btn-edit btn-warning" title="ویرایش">
                                        <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-delete btn-danger" title="حذف">
                                            <i class="fas fa-trash"></i>                          
                                        </a>
                                    </td>
                                </tr>
                            @endforeach                            
                        @else
                        <tr>
                            <td></td>
                            <td>title</td>
                            <td>title</td>
                            <td>title</td>
                              <td>
                                <a href="#" class="btn btn-edit btn-warning" title="ویرایش">
                                <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-delete btn-danger" title="حذف">
                                    <i class="fas fa-trash"></i>                          
                                </a>
                            </td>
                        </tr>
                        <tr>
                        <td></td>
                            <td>title</td>
                            <td>title</td>
                            <td>title</td>
                            <td>
                            <a href="#" class="btn btn-edit btn-warning" title="ویرایش">
                                <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-delete btn-danger" title="حذف">
                                    <i class="fas fa-trash"></i>                          
                                </a>
                            </td>
                        </tr>
                        <tr>
                        <td></td>
                            <td>title</td>
                            <td>title</td>
                            <td>title</td>
                            <td>
                            <a href="#" class="btn btn-edit btn-warning" title="ویرایش">
                                <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-delete btn-danger" title="حذف">
                                    <i class="fas fa-trash"></i>                          
                                </a>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>

            </section>
        </section>
    </main>
</div>
@endsection

@section("extrajs")
<script src="{{url('/')}}/dashboard/assets/js/datatables.min.js"></script>
<script src="{{url('/')}}/dashboard/assets/js/datatabledet.js"></script>
@endsection