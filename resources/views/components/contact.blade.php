<div class="card " id="contact">
    <!--begin::Body-->
    <div class="card-body p-lg-17">
        <!--begin::Row-->
        <div class="row mb-3">
            <!--begin::Col-->
            <div class="col-md-6 pe-lg-10">
                <!--begin::Form-->
                <form action="{{ route('contact') }}" class="form mb-15 fv-plugins-bootstrap5 fv-plugins-framework"
                    method="post" id="kt_contact_form">
                    <h1 class="fw-bold text-gray-900 mb-9">Envoyer nous un message</h1>
                    <!--begin::Input group-->
                    <div class="row mb-5">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="fs-5 fw-semibold mb-2">Nom</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="name">
                            <!--end::Input-->
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                            <!--end::Label-->
                            <label class="fs-5 fw-semibold mb-2">Email</label>
                            <!--end::Label-->

                            <!--end::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="email">
                            <!--end::Input-->
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-5 fv-row">
                        <!--begin::Label-->
                        <label class="fs-5 fw-semibold mb-2">Sujet</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input class="form-control form-control-solid" placeholder="" name="subject">
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-10 fv-row fv-plugins-icon-container">
                        <label class="fs-6 fw-semibold mb-2">Message</label>

                        <textarea class="form-control form-control-solid" rows="6" name="message"
                            placeholder="">        </textarea>
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Submit-->
                    <button type="submit" class="btn btn-primary" id="kt_contact_submit_button">

                        <!--begin::Indicator label-->
                        <span class="indicator-label">
                            Envoyer</span>
                        <!--end::Indicator label-->

                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                        <!--end::Indicator progress--> </button>
                    <!--end::Submit-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Col-->
            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Row-->
        <div class="row g-5 mb-5 mb-lg-15 ">
            <!--begin::Col-->
            <div class="col-sm-6 pe-lg-10">
                <!--begin::Phone-->
                <div class="bg-light card-rounded d-flex flex-column flex-center flex-center p-10 h-100">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-briefcase fs-3tx text-primary"><span class="path1"></span><span
                            class="path2"></span></i> <!--end::Icon-->

                    <!--begin::Subtitle-->
                    <h1 class="text-gray-900 fw-bold my-5">
                        Vous voulez discuter ?
                    </h1>
                    <!--end::Subtitle-->

                    <!--begin::Number-->
                    <div class="text-gray-700 fw-semibold fs-2">
                        2290190775682
                    </div>
                    <!--end::Number-->
                </div>
                <!--end::Phone-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->



        <!--begin::Card-->
        <div class="card mb-4 bg-light text-center ">
            <!--begin::Body-->
            <div class="card-body py-12">
                <!--begin::Icon-->
                <a href="#" class="mx-4">
                    <img src="/metronic8/demo2/assets/media/svg/brand-logos/facebook-4.svg" class="h-30px my-2" alt="">
                </a>
                <!--end::Icon-->

                <!--begin::Icon-->
                <a href="#" class="mx-4">
                    <img src="/metronic8/demo2/assets/media/svg/brand-logos/instagram-2-1.svg" class="h-30px my-2"
                        alt="">
                </a>
                <!--end::Icon-->

                <!--begin::Icon-->
                <a href="#" class="mx-4">
                    <img src="/metronic8/demo2/assets/media/svg/brand-logos/github.svg" class="h-30px my-2" alt="">
                </a>
                <!--end::Icon-->

                <!--begin::Icon-->
                <a href="#" class="mx-4">
                    <img src="/metronic8/demo2/assets/media/svg/brand-logos/behance.svg" class="h-30px my-2" alt="">
                </a>
                <!--end::Icon-->

                <!--begin::Icon-->
                <a href="#" class="mx-4">
                    <img src="/metronic8/demo2/assets/media/svg/brand-logos/pinterest-p.svg" class="h-30px my-2" alt="">
                </a>
                <!--end::Icon-->

                <!--begin::Icon-->
                <a href="#" class="mx-4">
                    <img src="/metronic8/demo2/assets/media/svg/brand-logos/twitter.svg" class="h-30px my-2" alt="">
                </a>
                <!--end::Icon-->

                <!--begin::Icon-->
                <a href="#" class="mx-4">
                    <img src="/metronic8/demo2/assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-30px my-2"
                        alt="">
                </a>
                <!--end::Icon-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Body-->
</div>