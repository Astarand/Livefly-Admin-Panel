<div class="col-lg-5 d-flex justify-content-end home2-emergency-section order-0 order-lg-1">
   <div class="home2-from-section-bg">
      {{-- @if(session('success'))
         <div class="alert alert-success">
            {{ session('success') }}
         </div>
      @endif --}}
      <h2>Book Appointment Today</h2>
      {{-- <form method="post" action="{{ route('save.appointment') }}"> --}}
         <form id="appointmentForm" method="post">
            @csrf
            <div class="row mb-4 g-3 g-sm-4 g-lg-2 g-xl-4">
               <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First Name" name="fname">
               </div>
               <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last Name" name="lname">
               </div>
               <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Phone" name="phone_no">
               </div>
               <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Email" name="email">
               </div>
            </div>
         
            <div class="row mb-4 g-3 g-sm-4 g-lg-2 g-xl-4">
               <div class="col-md-12">
                  <select id="serviceSelect" class="form-select" name="service" aria-label="Default select example">
                     <option value="">Select Services</option>
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
         
               <div class="col-md-12" id="serviceDiv">
                  <select class="form-select" id="serviceRequestFor" name="service_request_for" aria-label="Default select example">
                     <option value="0">Service Required for</option>
                     <option value="12hr">12 hr</option>
                     <option value="24hr">24 hr</option>
                  </select>
               </div>
               <input type="hidden" value="0" name="session_test" id="session_test">
            </div>
         
            <button type="button" id="submitBtn" class="pbmit-btn">Make Appointment</button>
         </form>

         <div id="successMessage" class="alert alert-success" style="display: none;"></div>
   </div>
</div>

<script>
   // Get the current page URL
   const currentUrl = window.location.href;

   // Check if the URL matches the specific condition
   if (currentUrl.includes("/basic-care-nursing")) {
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Basic Care Nursing";
   }
   if (currentUrl.includes("/critical-care-nursing")) {
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Critical Care Nursing";
   }
   if (currentUrl.includes("/icu-nursing-care")) {
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "ICU Nursing Care";
   }
   if (currentUrl.includes("/advance-care-nursing")) {
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Advance Care Nursing";
   }
   if (currentUrl.includes("/clinical-attendant")) {
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Clinical Attendant/Bedside Attendant";
   }
   if (currentUrl.includes("/short-term-nursing")) {
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Short term Nursing";
   }
   if (currentUrl.includes("/polysomnography")) {
      const serviceDiv = document.getElementById("serviceDiv");
      if (serviceDiv) {
         serviceDiv.style.display = "none";
      }
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Polysomnography test (PSG)";

      const sessionTest = document.getElementById("session_test");
      if (sessionTest) {
         sessionTest.value = "1";
      }
   }
   if (currentUrl.includes("/arterial-blood-gas-analysis")) {

      const serviceDiv = document.getElementById("serviceDiv");
      if (serviceDiv) {
         serviceDiv.style.display = "none";
      }
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Arterial blood gas analysis (ABG)";

      const sessionTest = document.getElementById("session_test");
      if (sessionTest) {
         sessionTest.value = "1";
      }
   }
   if (currentUrl.includes("/ambulatory-blood-pressure-monitoring")) {
      const serviceDiv = document.getElementById("serviceDiv");
      if (serviceDiv) {
         serviceDiv.style.display = "none";
      }
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Ambulatory BP monitoring (Ambulatory BP monitoring (Ambulatory BP monitoring (AVPM)))";

      const sessionTest = document.getElementById("session_test");
      if (sessionTest) {
         sessionTest.value = "1";
      }
   }
   if (currentUrl.includes("/portable-x-ray")) {

      const serviceDiv = document.getElementById("serviceDiv");
      if (serviceDiv) {
         serviceDiv.style.display = "none";
      }
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Portable X-ray";

      const sessionTest = document.getElementById("session_test");
      if (sessionTest) {
         sessionTest.value = "1";
      }
   }
   if (currentUrl.includes("/holter")) {
      const serviceDiv = document.getElementById("serviceDiv");
      if (serviceDiv) {
         serviceDiv.style.display = "none";
      }
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Holter";

      const sessionTest = document.getElementById("session_test");
      if (sessionTest) {
         sessionTest.value = "1";
      }
   }
   if (currentUrl.includes("/sample-collection")) {
      const serviceDiv = document.getElementById("serviceDiv");
      if (serviceDiv) {
         serviceDiv.style.display = "none";
      }
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Sample collection";

      const sessionTest = document.getElementById("session_test");
      if (sessionTest) {
         sessionTest.value = "1";
      }

   }
   if (currentUrl.includes("/telemedicine")) {
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Telemedicine";

      const sessionTest = document.getElementById("session_test");
      if (sessionTest) {
         sessionTest.value = "1";
      }
   }
   if (currentUrl.includes("/hospice")) {
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Palliative care/Hospice Care";
   }
   if (currentUrl.includes("/senior-care")) {
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Senior citizen care";
   }
   if (currentUrl.includes("/physiotherapy")) {

      const serviceDiv = document.getElementById("serviceDiv");
      if (serviceDiv) {
         serviceDiv.style.display = "none";
      }
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Physiotherapy";

      const sessionTest = document.getElementById("session_test");
      if (sessionTest) {
         sessionTest.value = "1";
      }
   }
   if (currentUrl.includes("/speech-and-swallow-therapy")) {
      const serviceDiv = document.getElementById("serviceDiv");
      if (serviceDiv) {
         serviceDiv.style.display = "none";
      }
      
      const serviceSelect = document.getElementById("serviceSelect");
      serviceSelect.value = "Speech & Swallow therapy";

      const sessionTest = document.getElementById("session_test");
      if (sessionTest) {
         sessionTest.value = "1";
      }
   }
</script>

<script>
   document.getElementById("submitBtn").addEventListener("click", async function () {
      // Get form data
      const form = document.getElementById("appointmentForm");
      const formData = new FormData(form);

      // Add session_test value as '1'
      //formData.set("session_test", "1");

      // Convert form data to JSON
      const data = Object.fromEntries(formData.entries());

      // Make API call
      try {
         const response = await fetch("{{ env('API_BASE_URL') }}appointmentsStore", {
            method: "POST",
            headers: {
               "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
         });

         const result = await response.json();

         if (response.ok) {
            // Display success message
            const successMessage = document.getElementById("successMessage");
            successMessage.textContent = "Appointment successfully created!";
            successMessage.style.display = "block";

            // Hide success message after 5 seconds
            setTimeout(() => {
               successMessage.style.display = "none";
            }, 5000);

            // Clear the form
            form.reset();
         } else {
            alert("Error: " + result.message);
         }
      } catch (error) {
         alert("An error occurred: " + error.message);
      }
   });
</script>





