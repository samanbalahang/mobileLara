@extends('thepublic.layout.master')
@section("extracss")
@endsection
@section("main")
<main>
    <section class="container-fluid">
        <h1 class="text-center">
            ورود به موبایل مسیحا
        </h1>
        <div class="row">
            <div class="col-12 p-3 col-md-6 m-auto">
                <form action="{{route('login.store')}}" class="mb-3" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">نام :</label>
                        <input type="text" class="form-control" id="name" placeholder="نام شما" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">:ایمیل</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">رمز عبور:</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <input type="submit" value="ثبت" class="btn btn-success w-100">
                </form>
            </div>
        </div>

    </section>

</main>
@endsection

@section("extrajs")

@endsection