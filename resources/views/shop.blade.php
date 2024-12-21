@extends('include.app')

@section('title', 'Shop - Livefly Healthcare | Healthcare Products at Your Fingertips')
@section('meta_description', 'Explore and purchase essential healthcare products and equipment from Livefly Healthcare. From medical supplies to wellness products, shop conveniently online.')
@section('keywords', 'Livefly Healthcare shop, healthcare products, medical equipment, wellness products, online healthcare store, home medical supplies, Kolkata healthcare products')


@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title">Shop</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                        <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                        <span><span class="post-root post post-post current-item">Shop</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->
<div class="page-content">

    <div class="container">
        <div class="card-deck g-4">
            <div class="row" id="product-container">

                {{-- <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card m-3">
                        <img class="card-img-top" src="https://img.freepik.com/free-vector/flat-design-gas-cylinder-illustration-set_23-2150268502.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Oxygen Cylender</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <button type="submit" class="pbmit-btn">
                            <i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom"></i>
                            Get Now
                        </button>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    
    <div class="modal fade" id="buyRentModal" tabindex="-1" aria-labelledby="buyRentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width:fit-content"> <!-- Add modal-lg here -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="largeModalLabel">Buy or Rent</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body my-4">
                    <!-- Form Content -->
                    <form id="buyRentForm">
                        <input type="hidden" id="productId" name="productId">
                        <input type="hidden" id="product_name" name="product_name">
                        <div class="form-group-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="input-block mb-3">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="input-block mb-3">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="input-block mb-3">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="phone">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="input-block mb-3">
                                        <label>Product Quantity<span class="text-danger">*</span></label>
                                        <input type="text" id="productQuantity" class="form-control" placeholder="Enter Product Quantity" name="quantity">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="input-block mb-3">
                                        <label>Equipment Required type<span class="text-danger">*</span></label>
                                        <select class="form-select" id="equipmentRequiredType" name="product_type">
                                            <option value="" disabled selected>Select...</option>
                                            <option value="buy">Buy</option>
                                            <option value="rent">Rent</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="input-block mb-3">
                                        <label>Message</label>
                                        <textarea type="text" name="message" class="form-control" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-item">
                            <div class="row align-items-end">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label>Address Line 1</label>
                                            <input type="text" name="address1" class="form-control" placeholder="Enter Address 1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label>Address Line 2</label>
                                            <input type="text" name="address2" class="form-control" placeholder="Enter Address 2">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="input-block mb-3">
                                            <label>City</label>
                                            <input type="text" name="city" class="form-control" placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="input-block mb-3">
                                            <label>State</label>
                                            <input type="text" name="state" class="form-control" placeholder="Enter State">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="input-block mb-3">
                                            <label>Pincode</label>
                                            <input type="text" name="pincode" class="form-control" placeholder="Enter Pincode">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" data-bs-dismiss="modal" class="btn btn-primary pbmit-btn paid-cancel-btn me-2" >Cancel</button>
                            <button type="submit" id="submit"  class="btn btn-primary pbmit-btn paid-continue-btn">Submit</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>


    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const apiBaseUrl = "{{ env('API_BASE_URL') }}";

        fetch(`${apiBaseUrl}shop_list`)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    const products = data.data;
                    const productContainerDiv = document.getElementById('product-container');

                    products.forEach(product => {
                        const cardDiv = document.createElement('div');
                        cardDiv.classList.add('col-lg-3', 'col-md-4', 'col-sm-6', 'mb-4');

                        cardDiv.innerHTML = `
                            <div style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; background: #fff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                <!-- Image Section -->
                                <div style="background: #f9f9f9; padding: 15px; text-align: center;">
                                    <img src="${product.product_image}" alt="${product.product_name}" style="width: 100%; max-height: 180px; object-fit: contain;">
                                </div>
                                
                                <!-- Text Section -->
                                <div style="padding: 15px; text-align: center;">
                                    <!-- Product Name -->
                                    <h3 style="font-size: 1rem; font-weight: bold; color: #333; margin-bottom: 5px;">${product.product_name}</h3>
                                    
                                    <!-- Product Description -->
                                    <p style="font-size: 0.875rem; color: #666; margin-bottom: 10px; line-height: 1.4;">
                                        ${product.product_description}
                                    </p>
                                    
                                    <!-- Price -->
                                    <div style="margin-bottom: 10px;">
                                        <p style="font-size: 1.25rem; font-weight: bold; color: #e63946; margin-bottom: 5px;">
                                            ₹${product.selling_price}
                                        </p>
                                        <p style="font-size: 0.875rem; color: #999; margin-bottom: 0;">
                                            <strong>Type:</strong> ${product.product_type}
                                        </p>
                                    </div>
                                    
                                    <!-- Add to Cart Button -->
                                    <button style="background: #28a745; color: #fff; border: none; padding: 10px 15px; font-size: 0.9rem; border-radius: 4px; cursor: pointer; width: 100%; transition: background 0.3s;" 
                                            class="buy-now-btn"
                                            data-product-id="${product.id}" 
                                            data-product-name="${product.product_name}" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#buyRentModal">
                                        Get Now
                                    </button>
                                </div>
                            </div>
                        `;

                        productContainerDiv.appendChild(cardDiv);
                    });

                    // Attach click event listeners to the "Add to Cart" buttons
                    document.querySelectorAll('.buy-now-btn').forEach(button => {
                        button.addEventListener('click', function () {
                            const productId = this.getAttribute('data-product-id');
                            const productName = this.getAttribute('data-product-name');

                            document.getElementById('productId').value = productId;
                            document.getElementById('product_name').value = productName;
                        });
                    });
                } else {
                    alert('Failed to retrieve shop data');
                }
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                alert('An error occurred while loading the products');
            });
    });

    //---------------- model data save ------------
    document.getElementById('buyRentForm').addEventListener('submit', async function (event) {
        const apiBaseUrl = "{{ env('API_BASE_URL') }}";
        event.preventDefault(); // Prevent the default form submission

        // Gather form data
        const formData = new FormData(event.target);
        const data = Object.fromEntries(formData.entries()); // Convert to JSON-like object

        // Append the correct product_id manually if needed
        data.product_id = document.getElementById('productId').value;
        data.product_name = document.getElementById('product_name').value;
        

        try {
            // Send API request
            const response = await fetch(`${apiBaseUrl}shop_now`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            });

            // Handle API response
            const result = await response.json();
            if (response.ok) {
                alert('Shop request created successfully!');
                location.reload()
                //console.log(result); // Success response from the server
            } else {
                //console.error(result);
                alert(`Failed to submit: ${result.message}`);
            }
        } catch (error) {
            //console.error('Error:', error);
            alert('An error occurred while submitting the form.');
        }
    });

</script>



    @endsection