@extends('include.app')

@section('content')

        <!-- Title Bar -->
        <div class="pbmit-title-bar-wrapper">
            <div class="container">
               <div class="pbmit-title-bar-content">
                  <div class="pbmit-title-bar-content-inner">
                     <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                           <h1 class="pbmit-tbar-title">Blog</h1>
                        </div>
                     </div>
                     <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                           <span><a title="" href="{{ route('index') }}" class="home"><span>Livefly</span></a></span>
                           <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                           <span><span class="post-root post post-post current-item">Blogs</span></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </div>
        <!-- Title Bar End-->

        <!-- Page Content -->
            <div class="page-content blog-grid">   
               <!-- Blog Grid -->
               <section class="section-lg">
                  <div class="container">
                     <div class="row" id="blogs-container">
                           
                     </div>
                     
                  </div>
               </section>
               <!-- Blog Grid End -->
            </div>
         
            <script>
               document.addEventListener('DOMContentLoaded', function () {
                   const apiUrl = '{{ env('API_BASE_URL') }}blogs';
                   const blogsContainer = document.getElementById('blogs-container');
                   const blogDetailsUrl = '{{ route("blog-detailss", ":id") }}';  // Pass route with placeholder
           
                   // Fetch blogs from the API
                   fetch(apiUrl)
                       .then(response => response.json())
                       .then(data => {
                           if (data.success && data.data.length > 0) {
                               data.data.forEach(blog => {
                                   const images = blog.images; // An array of image URLs
                                   const imageUrl = images.length > 0 ? images[0] : 'path/to/default/image.jpg'; // Default image if no images
           
                                   // Create the blog HTML structure
                                   const blogHtml = `
                                       <div class="col-sm-12 col-md-4">
                                           <article class="pbmit-blog-style-1">
                                               <div class="post-item">
                                                   <div class="pbmit-featured-container">
                                                       <div class="pbmit-featured-wrapper">
                                                           <img src="${imageUrl}" class="img-fluid" alt="${blog.title}" />
                                                       </div>
                                                   </div>
                                                   <div class="pbminfotech-box-content">
                                                       <div class="pbmit-meta-container">
                                                           <div class="pbmit-meta-date-wrapper pbmit-meta-line">					
                                                               <i class="pbmit-base-icon-calendar-2"></i> ${new Date(blog.created_at).toDateString()}				
                                                           </div>
                                                           <div class="pbmit-meta-category-wrapper pbmit-meta-line">
                                                               <div class="pbmit-meta-category">
                                                                   <i class="pbmit-base-icon-folder-open-empty"></i> 
                                                                   <a href="${blogDetailsUrl.replace(':id', blog.id)}" rel="category tag">Health Care</a>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <h3 class="pbmit-post-title">
                                                           <a href="${blogDetailsUrl.replace(':id', blog.id)}">${blog.title}</a>
                                                       </h3>
                                                       <div class="pbminfotech-box-desc">
                                                           <div class="pbminfotech-box-desc-text">
                                                               ${blog.description || 'We are providing excellent medical advice for your good health…'}
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </article>
                                       </div>
                                   `;
           
                                   // Append the blog HTML to the container
                                   blogsContainer.insertAdjacentHTML('beforeend', blogHtml);
                               });
                           } else {
                               blogsContainer.innerHTML = '<p>No blogs available.</p>';
                           }
                       })
                       .catch(error => {
                           console.error('Error fetching blogs:', error);
                           blogsContainer.innerHTML = '<p>Error loading blogs. Please try again later.</p>';
                       });
               });
           </script>
           
           
           
           

@endsection