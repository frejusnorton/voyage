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
    </div>
    <!--end::Body-->
</div>