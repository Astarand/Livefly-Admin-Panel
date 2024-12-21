@extends('include.app')

@section('title', 'Career Opportunities - Livefly Healthcare | Join Our Dedicated Team')
@section('meta_description', 'Explore rewarding career opportunities at Livefly Healthcare. Join our team of professionals delivering exceptional home healthcare services. Apply now!')
@section('keywords', 'Livefly Healthcare careers, job opportunities, healthcare jobs, nursing jobs, physiotherapy careers, home healthcare team, Kolkata healthcare jobs')


@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title">Career</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                        <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                        <span><span class="post-root post post-post current-item">Career</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 my-4">
                <div id="careerList"></div>
                {{-- <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Job Tittle</h5>
                        <p>On-site</p>
                        <h6>Salary: </h6>
                        <h6>Job Description</h6>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <button type="button" class="pbmit-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered"> <!-- Apply modal-lg only here -->
        <div class="modal-content">
            <div class="modal-body">
                <form method="post" id="contact-form" action="javascript:void(0);" novalidate="novalidate">
                    <div class="row mb-3 g-3">
                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control" placeholder="First Name*" name="f-name" required="">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control" placeholder="Last Name*" name="l-name" required="">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control" placeholder="Email" name="email" required="">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control" placeholder="Phone*" name="number" required="">
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <input type="text" class="form-control" placeholder="Position Apply For*" name="position" required="">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control" placeholder="Years of Experience*" name="experience" required="">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control" placeholder="Address Line 1*" name="address1" required="">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" class="form-control" placeholder="Address Line 2*" name="address2" required="">
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <input type="text" class="form-control" placeholder="City*" name="city" required="">
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <input type="text" class="form-control" placeholder="Pincode*" name="pincode" required="">
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <label for="formFile" class="form-label">Upload your CV<span class="text-danger">*</span></label>
                            <input class="form-control" type="file" id="formFile" name="cv" required="">
                        </div>
                        <input type="hidden" name="hiddenJobId" value="">
                        <div class="col-md-12 col-lg-12 message-status"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn pbmit-btn1" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="pbmit-btn">Submit</button>
                    </div>
                </form>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn pbmit-btn1" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="pbmit-btn">Submit</button> <!-- Changed to type="submit" for form submission -->
            </div> --}}


        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", async () => {
        const apiUrl = "{{ env('API_BASE_URL') }}career_list";
        const careerListDiv = document.getElementById("careerList");
        const modalForm = document.getElementById("contact-form");
        const positionField = modalForm.querySelector("input[name='position']");

        try {
            // Fetch data from API
            const response = await fetch(apiUrl);
            const result = await response.json();

            if (response.ok && result.success) {
                const jobs = result.data;

                // Clear existing content
                careerListDiv.innerHTML = "";

                // Dynamically create job cards
                jobs.forEach((job) => {
                    const jobCard = `
                   <div class="card mb-4">
                      <div class="card-body">
                         <h5 class="card-title">${job.title}</h5>
                         <p>${job.location}</p>
                         <h6>Salary: ${job.salary}</h6>
                         <h6>Job Description:</h6>
                         <p class="card-text">${job.description}</p>
                         <button type="button" class="pbmit-btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-job-id="${job.id}" data-job-title="${job.title}">
                            Apply Now
                         </button>
                      </div>
                   </div>
                `;

                    // Append the job card to the container
                    careerListDiv.insertAdjacentHTML("beforeend", jobCard);
                });

                // Add event listener for setting job ID and title in the modal
                const applyButtons = document.querySelectorAll("button[data-bs-target='#exampleModal']");
                applyButtons.forEach((button) => {
                    button.addEventListener("click", () => {
                        const jobId = button.getAttribute("data-job-id");
                        const jobTitle = button.getAttribute("data-job-title");

                        // Set hidden input value
                        const hiddenInput = modalForm.querySelector("input[name='hiddenJobId']");
                        if (hiddenInput) {
                            hiddenInput.value = jobId;
                        } else {
                            // Add hidden input dynamically if not already present
                            const newHiddenInput = document.createElement("input");
                            newHiddenInput.type = "hidden";
                            newHiddenInput.name = "hiddenJobId";
                            newHiddenInput.value = jobId;
                            modalForm.appendChild(newHiddenInput);
                        }

                        // Set the "Position Apply For" field with job title
                        positionField.value = jobTitle;
                    });
                });
            } else {
                careerListDiv.innerHTML = `<div class="alert alert-warning">Failed to retrieve job listings.</div>`;
            }
        } catch (error) {
            console.error("Error fetching career list:", error);
            careerListDiv.innerHTML = `<div class="alert alert-danger">An error occurred while loading jobs.</div>`;
        }
    });
</script>

<script>
    document.getElementById("contact-form").addEventListener("submit", async function(event) {
        event.preventDefault();

        const form = event.target;
        const formData = new FormData(form);

        // Map form fields to required API field names
        const apiData = {
            fname: formData.get("f-name"),
            lname: formData.get("l-name"),
            email: formData.get("email"),
            phone_no: formData.get("number"),
            exp_year: formData.get("experience"),
            address1: formData.get("address1"),
            address2: formData.get("address2"),
            city: formData.get("city"),
            pincode: formData.get("pincode"),
            applied_job_id: formData.get("hiddenJobId"),
            apply_for: formData.get("position"),
            cv: formData.get("cv") // File upload handling
        };

        const apiUrl = "{{ env('API_BASE_URL') }}applied_job";
        const requestData = new FormData();

        // Append fields to FormData for API
        for (const key in apiData) {
            requestData.append(key, apiData[key]);
        }

        try {
            const response = await fetch(apiUrl, {
                method: "POST",
                body: requestData
            });

            const result = await response.json();

            if (response.ok) {
                // Show success message
                const messageStatus = document.querySelector(".message-status");
                messageStatus.innerHTML = '<div class="alert alert-success">Your application has been submitted successfully!</div>';
                messageStatus.style.display = "block";

                // Clear form data
                form.reset();

                // Hide success message and close modal after 5 seconds
                setTimeout(() => {
                    messageStatus.style.display = "none";

                    // Close the modal
                    const modalElement = document.getElementById("exampleModal");
                    const modal = bootstrap.Modal.getInstance(modalElement);
                    modal.hide();
                }, 5000);
            } else {
                // Show error message
                const messageStatus = document.querySelector(".message-status");
                messageStatus.innerHTML = `<div class="alert alert-danger">Submission failed: ${result.message || "Please try again."}</div>`;
                messageStatus.style.display = "block";

                // Hide error message after 5 seconds
                setTimeout(() => {
                    messageStatus.style.display = "none";
                }, 5000);
            }
        } catch (error) {
            console.error("Error during form submission:", error);

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