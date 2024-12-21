@extends('include.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>


<!-- page content -->
<div class="page-content">

    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                            <h1 class="pbmit-tbar-title">Book an Appointment</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                            <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                            <span><span class="post-root post post-post current-item">Book an Appointment</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pbmit-bg-color-light section-lg contact-section-bg" style="padding-top:0;">
        <div class="container ">
            <div class="row g-3 g-lg-5">
                <div class="col-lg-8 col-sm-12">
                    <div class="pbmit-heading-subheading text-left">
                        <h4 class="pbmit-subtitle">Livefly</h4>
                        <h2 class="pbmit-title">Need an Emergency Appointment?</h2>
                        <p>Get in touch with us. We will reach you out as soon as possible.</p>
                    </div>
                    <form method="post">
                        @csrf
                        <div class="row mb-3 g-3">
                            <h5>Contact Person Details</h5>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="First Name*" name="fname" required="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="Last Name*" name="lname" required="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="Email" name="email" required="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="Phone*" name="phone_no" required="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="Address Line 1*" name="address1" required="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="Address Line 2*" name="address2" required="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="City*" name="city" required="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" class="form-control" placeholder="Pincode*" name="pincode" required="">
                            </div>
                            <h5 class="pt-4">Patient Details</h5>
                            <div class="col-lg-6 col-md-6">
                                <label for="formFile" class="form-label">Patient Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Patient Name*" name="patient_name" required="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label for="formFile" class="form-label">Service Required<span class="text-danger">*</span></label>
                                <select class="form-select" name="service" aria-label="Default select example" required>
                                    <option selected value="">Select Services</option>
                                    <option value="Critical Care Nursing">Critical Care Nursing</option>
                                    <option value="ICU Nursing Care">ICU Nursing Care</option>
                                    <option value="Advance Care Nursing">Advance Care Nursing</option>
                                    <option value="Basic Care Nursing">Basic Care Nursing</option>
                                    <option value="Clinical Attendant/Bedside Attendant">Clinical Attendant/Bedside Attendant</option>
                                    <option value="Short term Nursing">Short term Nursing</option>
                                    <option value="Physiotherapy">Physiotherapy</option>
                                    <option value="Speech & Swallow therapy">Speech & Swallow therapy</option>
                                    <option value="Polysomnography test (PSG)">Polysomnography test (PSG)</option>
                                    <option value="Arterial blood gas analysis (ABG)">Arterial blood gas analysis (ABG)</option>
                                    <option value="Ambulatory BP monitoring (AVPM)">Ambulatory BP monitoring (AVPM)</option>
                                    <option value="Portable X-ray">Portable X-ray</option>
                                    <option value="Holter">Holter</option>
                                    <option value="Telemedicine">Telemedicine</option>
                                    <option value="Palliative care/Hospice Care">Palliative care/Hospice Care</option>
                                    <option value="Senior citizen care">Senior citizen care</option>
                                    <option value="Sample collection">Sample collection</option>
                                </select>

                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label for="formFile" class="form-label">Patient Condition<span class="text-danger">*</span></label>
                                <select class="form-select" name="patient_condition" aria-label="Default select example" required="">
                                    <option selected="">Select Condition</option>
                                    <option value="Critical">Critical</option>
                                    <option value="Emergency">Emergency</option>
                                    <option value="Stable">Stable</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <label for="formFile" class="form-label">Date<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="apt_date" required="">
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <label for="formFile" class="form-label">Service Time</label>
                                <select class="form-select" name="patient_condition" aria-label="Default select example" required="">
                                    <option selected="">Select Time</option>
                                    <option value="12">12 Hr</option>
                                    <option value="24">24 Hr</option>
                                </select>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <textarea class="form-control" name="apt_message" rows="4" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="flexCheckChecked"
                                        onchange="toggleDropdown(this)"
                                    >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Need Equipments?
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12" id="equipmentDropdown">
                                <label>Select Equipment</label><br>
                                <select
                                    data-placeholder="Select Equipment"
                                    multiple
                                    class="chosen-select form-select"
                                    name="select_equipment[]"
                                >
                                    <option value="Oxygen Cylinder">Oxygen Cylinder</option>
                                    <option value="Oxygen Concentrator">Oxygen Concentrator</option>
                                    <option value="ICU 5-Function motorized bed">
                                        ICU 5-Function motorized bed
                                    </option>
                                    <option value="Fowler Bed">Fowler Bed</option>
                                    <option value="Air Mattress">Air Mattress</option>
                                    <option value="Nimbus Mattress">Nimbus Mattress</option>
                                    <option value="Foam Mattress">Foam Mattress</option>
                                    <option value="BiPAP ST & Auto">BiPAP ST & Auto</option>
                                    <option value="CPAP">CPAP</option>
                                    <option value="Non-invasive Ventilator">
                                        Non-invasive Ventilator
                                    </option>
                                    <option value="Cardiac Monitor">Cardiac Monitor</option>
                                    <option value="Infusion pump">Infusion pump</option>
                                    <option value="Syringe Pump">Syringe Pump</option>
                                    <option value="DVT Cuff">DVT Cuff</option>
                                    <option value="DVT Pump">DVT Pump</option>
                                    <option value="IV Stand">IV Stand</option>
                                    <option value="Suction Machine">Suction Machine</option>
                                    <option value="Nebulizer">Nebulizer</option>
                                    <option value="Back Rest">Back Rest</option>
                                    <option value="Wheel Chair">Wheel Chair</option>
                                    <option value="Walker">Walker</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <button type="submit" class="pbmit-btn">
                                <i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                SEND MESSAGE
                            </button>
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-12 col-lg-12 message-status"></div>
                    </form>

                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single-service-contact home2-Emergency-Cases-section-bg">
                        <div class="single-service-contact-last">
                            <h2 class="pbmit-element-title text-white mb-5">Schedule Hours</h2>
                            <div class="widget mb-5">
                                <ul class="pbmit-timelist-list Emergency-timelist-list">
                                    <li>
                                        <span class="pbmit-timelist-li-title pbmit-color-global">Monday</span>
                                        <span class="pbmit-timelist-li-value text-white">10:00 am - 07:00 pm</span>
                                    </li>
                                    <li>
                                        <span class="pbmit-timelist-li-title pbmit-color-global">Tuesday:</span>
                                        <span class="pbmit-timelist-li-value text-white">10:00 am - 07:00 pm</span>
                                    </li>
                                    <li>
                                        <span class="pbmit-timelist-li-title pbmit-color-global">Wednesday:</span>
                                        <span class="pbmit-timelist-li-value text-white">10:00 am - 07:00 pm</span>
                                    </li>
                                    <li>
                                        <span class="pbmit-timelist-li-title pbmit-color-global">Thursday:</span>
                                        <span class="pbmit-timelist-li-value text-white">10:00 am - 07:00 pm</span>
                                    </li>
                                    <li>
                                        <span class="pbmit-timelist-li-title pbmit-color-global">Friday:</span>
                                        <span class="pbmit-timelist-li-value text-white">10:00 am - 07:00 pm</span>
                                    </li>
                                    <li>
                                        <span class="pbmit-timelist-li-title pbmit-color-global">Saturday</span>
                                        <span class="pbmit-timelist-li-value text-white">10:00 am - 07:00 pm</span>
                                    </li>
                                    <li>
                                        <span class="pbmit-timelist-li-title pbmit-color-global">Sunday</span>
                                        <span class="pbmit-timelist-li-value text-white">10:00 am - 07:00 pm</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center contact-border-top">
                                <i class="pbmit-doctery-icon pbmit-doctery-icon-headphones"></i>
                                <div class="single-service-contents">
                                    Emergency Cases
                                    <h2>033-46041975</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="CartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn pbmit-btn1" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="pbmit-btn">Submit</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Get the checkbox and the modal
    const checkbox = document.getElementById('flexCheckChecked');
    const modal = new bootstrap.Modal(document.getElementById('CartModal'));

    // Add an event listener to the checkbox
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            modal.show(); // Show the modal if the checkbox is checked
        }
    });
</script>

<script>
    function toggleDropdown(checkbox) {
        // Get the dropdown element
        const dropdown = document.getElementById('equipmentDropdown');
        
        // Toggle visibility based on the checkbox state
        if (checkbox.checked) {
            dropdown.style.display = 'block'; 
        } else {
            dropdown.style.display = 'none'; 
        }
    }

    $(".chosen-select").chosen({
        no_results_text: "Oops, nothing found!"
        })
    
</script>

<script>
    document.querySelector("form").addEventListener("submit", async function (event) {
        event.preventDefault();

        const form = event.target;
        const formData = new FormData(form);

        // Add data to FormData
        const data = {
            fname: formData.get("fname"),
            lname: formData.get("lname"),
            phone_no: formData.get("phone_no"),
            email: formData.get("email"),
            address1: formData.get("address1"),
            address2: formData.get("address2"),
            city: formData.get("city"),
            pincode: formData.get("pincode"),
            patient_name: formData.get("patient_name"),
            service: formData.get("service"),
            patient_condition: formData.get("patient_condition"),
            apt_date: formData.get("apt_date"),
            apt_time: formData.get("apt_time"),
            apt_message: formData.get("apt_message"),
            equipmentString: (formData.getAll("select_equipment[]")).join(", "),
            session_test: "0"
        };

        try {
            const response = await fetch("{{ env('API_BASE_URL') }}emergency_appointment", {
            
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            });

            const result = await response.json();

            if (response.ok) {
                // Show success message
                const messageStatus = document.querySelector(".message-status");
                messageStatus.innerHTML = '<div class="alert alert-success">Appointment submitted successfully!</div>';
                messageStatus.style.display = "block";

                // Reset the form
                form.reset();

                // Hide success message after 5 seconds
                setTimeout(() => {
                    messageStatus.style.display = "none";
                }, 5000);
            } else {
                // Show error message
                const messageStatus = document.querySelector(".message-status");
                messageStatus.innerHTML = `<div class="alert alert-danger">Failed to submit: ${result.message || "Please try again."}</div>`;
                messageStatus.style.display = "block";

                // Hide error message after 5 seconds
                setTimeout(() => {
                    messageStatus.style.display = "none";
                }, 5000);
            }
        } catch (error) {
            console.error("Error:", error);

            // Show error message
            const messageStatus = document.querySelector(".message-status");
            messageStatus.innerHTML = '<div class="alert alert-danger">An error occurred. Please try again later.</div>';
            messageStatus.style.display = "block";

            // Hide error message after 5 seconds
            setTimeout(() => {
                messageStatus.style.display = "none";
            }, 5000);
        }
    });
</script>


@endsection