@extends('include.app')

@section('content')

<div class="page-content">
        <!-- Blog Details -->
        <section class="section-lgx">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <?php $blog_id; ?>
                            <!-- Blog 01 -->
                            {{-- <div class="col-md-12">
                                <article class="post">                                        
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('assets/images/blog/blog-01.jpg') }}" class="img-fluid w-100" alt="" />
                                    </div>
                                    <div class="post-content">                                       
                                        <p>We are provide excellent medical advices for your good health and we have latest medical technology with best medical facility. Duis aute sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                                        <p>Veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                        <blockquote>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout<cite>William Blake</cite>
                                            </p>
                                        </blockquote>                                     
                                        <h2>Doctor working procedures and expertise</h2>
                                        <div class="row mb-4">
                                            <div class="col-12 col-sm-6">
                                                <img src="images/project/project-01.jpg" class="img-fluid" alt="" />
                                            </div>
                                            <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                <img src="images/project/project-02.jpg" class="img-fluid" alt="" />
                                            </div>
                                        </div>
                                        <p>We are always provide excellent medical advices for your good health and safety. Duis aute sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                                        <ul class="list-dots">
                                            <li>We provide excellent services for your ultimate good health.</li>
                                            <li>Preparing for all type of surgeries and emergencies cases.</li>
                                            <li>Always provide original and latest medicine for health care.</li>
                                            <li>Doctors use advanced latest equipment for patient surgery.</li>
                                        </ul>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                    </div>
                                </article> 
                            </div>  --}}

                            <div class="col-md-12" id="blog-details-container">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details End -->
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const blogId = {{ $blog_id }};  // Ensure this value is passed correctly from the controller
        const apiUrl = `{{ env('API_BASE_URL') }}blog_details/${blogId}`;

        // Fetch the blog details from the API
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data) {
                    const blog = data.data;

                    // Set the blog content dynamically
                    const blogContent = `
                        <div class="post-thumbnail">
                            <img src="${blog.images[0]}" class="img-fluid w-100" alt="${blog.title}" />
                        </div>
                        <div class="post-content">
                            <h2>${blog.title}</h2>
                            <div class="content">${blog.content}</div>
                            <div class="gallery">
                                ${blog.images.map(image => `
                                    <img src="${image}" class="img-fluid" alt="${blog.title}" />
                                `).join('')}
                            </div>
                        </div>
                    `;

                    // Insert the dynamic blog content into the page
                    document.getElementById('blog-details-container').innerHTML = blogContent;
                } else {
                    document.getElementById('blog-details-container').innerHTML = '<p>Blog content not found.</p>';
                }
            })
            .catch(error => {
                console.error('Error fetching blog details:', error);
                document.getElementById('blog-details-container').innerHTML = '<p>Error loading blog details. Please try again later.</p>';
            });
    });
</script>

@endsection