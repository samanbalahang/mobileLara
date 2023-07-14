@extends('dashboard.layouts.master')

@section("extracss")
<link href="{{url('/')}}/dashboard/assets/css/summernote.min.css" rel="stylesheet">
<script src="{{url('/')}}/dashboard/assets/js/summernote.min.js"></script>
@endsection

@section("main")
<div class="col-12 col-md-10">
    <div class="container-fluid p-0">
        <div class="row">
            <main class="col-12 col-md-9">
                @include('dashboard.extras.pageSettings')
                <section id="mainForm">
                    <section class="formTitle">
                        <h1 class="mb-0 text-center">
                            <strong>{{__("ایجاد محصول")}}</strong>
                        </h1>

                    </section>
                    <section class="my-4">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="" id="tags">
                                    <input type="hidden" value="" id="cats">
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="text" id="uri" name="uri" class="form-control" />
                                        <label class="form-label" for="uri">uri</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="text" id="title" name="title" class="form-control" />
                                        <label class="form-label" for="title">title</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="text" id="post_desc" name="post_desc" class="form-control" />
                                        <label class="form-label" for="post_desc">post_desc</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <label class="form-label" for="content">content</label>
                                        <textarea name="content" id="content" cols="30" rows="10" class="summernote summernote-elemant"></textarea>

                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="number" id="sort" name="sort" class="form-control" />
                                        <label class="form-label" for="sort">sort</label>
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <p class="form-label" for="mainImg">main img</p>
                                        <img src="{{url('/')}}/dashboard/assets/images/sections/image.jpg" alt="image" class="cursor-pointer max-w-100" id="addImage">
                                        <input type="file" id="mainImg" name="umainImg" class="form-control d-none" />

                                    </div>

                                    <div class="md-form form-outline form-gold my-5">
                                        <p class="form-label" for="SquareImg">عکس مربعی</p>
                                        <img src="{{url('/')}}/dashboard/assets/images/sections/image.jpg" alt="image" class="cursor-pointer max-w-100" id="addSquareImage">
                                        <input type="file" id="SquareImg" name="uSquareImg" class="form-control d-none" />
                                    </div>
                                    <div class="md-form form-outline form-gold my-5">
                                        <p class="form-label" for="largeImg">عکس بزرگ زوم</p>
                                        <img src="{{url('/')}}/dashboard/assets/images/sections/image.jpg" alt="image" class="cursor-pointer max-w-100" id="addLargeImgImage">
                                        <input type="file" id="largeImg" name="ulargeImg" class="form-control d-none" />
                                    </div>

                                    <div class="md-form form-outline form-gold my-5">
                                        <input type="submit" id="submit" name="submit" class="form-control bg-base-gold" value="ثبت" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </section>
            </main>
            @include("dashboard.layouts.leftSideMedia")



        </div>
    </div>

</div>
@endsection


@section("extrajs")
<script src="{{url('/')}}/dashboard/assets/js/form.js"></script>
<script src="{{url('/')}}/dashboard/assets/js/summernote-ext-elfinder.js"></script>
<script src="{{url('/')}}/dashboard/assets/js/leftSide-media.js"></script>
<script src="{{url('/')}}/dashboard/assets/js/dropzone.min.js"></script>
<script>
    $(function() {
        var summernote = $(".summernote");
        $(".summernote").summernote({
            height: 300,
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    sendFile(files[0], editor, welEditable);
                }
            }
        });

        function sendFile(file, editor, welEditable) {
            data = new FormData();
            data.append("file", file);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                data: data,
                type: "POST",
                url: "<?php echo route("summerNoteMedia"); ?>",
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    console.log(url);
                    var imgNode = document.createElement('img');
                    var src = URL.createObjectURL(file);
                    console.log(src);
                    imgNode.setAttribute("src", src);
                    imgNode.setAttribute("class", "w-100");
                    imgNode.setAttribute("alt", "alt");
                    $(summernote).summernote('insertNode', imgNode);
                }
            });
        }

        $("#addImage").on("click", function() {
            $("#mainImg").click();
        });
        $("#addSquareImage").on("click", function() {
            $("#SquareImg").click();
        });
        $("#addLargeImgImage").on("click", function() {
            $("#largeImg").click();
        });

        mainImg.onchange = evt => {
            var [file] = mainImg.files
            if (file) {
                addImage.src = URL.createObjectURL(file)
            }
        }

        SquareImg.onchange = evt => {
            var [file] = SquareImg.files
            if (file) {
                addSquareImage.src = URL.createObjectURL(file)
            }else{
                console.log("a");
            }
        }

        largeImg.onchange = evt => {
            var [file] = largeImg.files
            if (file) {
                addLargeImgImage.src = URL.createObjectURL(file)
            }
        }




        $("#title").on("focusout", function() {
            if ($("#title").val() != "") {
                if ($("#uri").val() == "") {
                    str = $("#title").val();
                    str = str.replace(/\s+/g, '-').toLowerCase();
                    str = str.trim();
                    $("#uri").val(str);
                }
            }
        });

    })
</script>

@endsection