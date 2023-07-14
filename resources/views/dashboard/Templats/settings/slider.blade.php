<div class="modal-father" id="settingsSlider">
    <div class="pup-dialog pup-dialog-centered pup-dialog-scrollable" id="templateSectionsParts">
        <div class="w-100 h-100">
            <div class="modal-header">
                <p class="text-white btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-close"></i>
                </p>
            </div>
            <div class="modal-body">
                <section>
                    <div class="md-form mb-5 rtl">
                        <label for="type" class="label active">نوع اسلایدر خود را درج کنید</label>
                        <select name="type" id="type" class="form-control">
                            <option value="1">
                                اسلایدر(یک عکس در صفحه نمایش میدهد برای هدر مناسب است)
                            </option>
                            <option value="2">
                                چرخ و فلک(بیش از یک عکس در صفحه نمایش میدهد برای اسلاید محصولات مناسب است)
                            </option>
                        </select>
                    </div>
                    <div class="md-form mb-5 rtl">
                        <label for="hasDot" class="label active">دارای دات است؟</label>
                        <select name="hasDot" id="hasDot" class="form-control">
                            <option value="0">
                                خیر
                            </option>
                            <option value="1">
                                بله
                            </option>
                        </select>
                    </div>
                    <div class="md-form mb-5 rtl">
                        <label for="hasNextPrev" class="label active">
                            دارای فلش قبلی و بعدی است
                        </label>
                        <select name="hasNextPrev" id="hasNextPrev" class="form-control">
                            <option value="0">
                                خیر
                            </option>
                            <option value="1">
                                بله
                            </option>
                        </select>
                    </div>
                    <div class="md-form mb-5 rtl">
                        <label for="whatGetSlide" class="label active">
                            چه چیزی اسلاید شود
                        </label>
                        <select name="whatGetSlide" id="whatGetSlide" class="form-control">
                            <option value="0">
                                یک اسلایدر تستی
                            </option>
                            <option value="1">
                                نوشته ها
                            </option>
                            <option value="2">
                                برگه ها
                            </option>
                            <option value="3">
                                محصولات
                            </option>
                        </select>
                    </div>
                    <div class="selectSliderCat" id="selectSliderCat">
                        <div class="md-form mb-5 rtl">
                            <label for="SelectCatSliders" class="label active">
                                دسته بندی خود را انتخاب کنید
                            </label>
                            <select name="SelectCatSliders" id="SelectCatSliders" class="form-control">
                                <option value="0">
                                    همه
                                </option>
                                <option value="1">
                                    اسم دسته بندی
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="md-form mb-5 rtl">
                        <label for="slidersCount" class="label active">
                            تعداد اسلایدها حداقل 1 و حداکثر 8
                        </label>
                        <input type="number" name="slidersCount" id="slidersCount" min="1" max="8" value="1" class="form-control">
                    </div>
                </section>
                <a href="#" class="btn btn-primary" id="sliders-style-tab-pane-apply">
                    تایید
                </a>
            </div>
        </div>
    </div>
</div>