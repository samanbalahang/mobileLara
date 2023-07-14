<div class="modal-father" id="settingsImg">
    <div class="pup-dialog pup-dialog-centered pup-dialog-scrollable" id="templateSectionsParts">
        <div class="w-100 h-100">
            <div class="modal-header">
                <p class="text-white btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-close"></i>
                </p>
            </div>
            <div class="modal-body">
                <section>
                    <table class="" id="medias-here">
                        <tbody>
                            <tr>
                                <td><img src="{{url('/')}}/dashboard/assets/images/sambal.png" alt="png" width="20%"></td>
                                <td><img src="{{url('/')}}/dashboard/assets/images/sambal.png" alt="png" width="20%"></td>
                                <td><img src="{{url('/')}}/dashboard/assets/images/sambal.png" alt="png" width="20%"></td>
                                <td><img src="{{url('/')}}/dashboard/assets/images/sambal.png" alt="png" width="20%"></td>
                                <td><img src="{{url('/')}}/dashboard/assets/images/sambal.png" alt="png" width="20%"></td>
                            </tr>
                    </table>
                </section>
                <section>
                    <h3>
                        فایل های خود را اینجا درج کنید.
                    </h3>
                <form method="post" action="{{route('dropMedia')}}" class="form-control dropzone dz-clickable"  enctype="multipart/form-data" id="multymedia">
                        @csrf
                    <div class="dz-default dz-message"><span>فایل های خود را به این ناحیه درگ کنید</span></div>
                </form>
                </section>
            </div>
        </div>
    </div>
</div>