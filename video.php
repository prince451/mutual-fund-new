<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<style>

.video-container {
    flex: 1; /* Equal width for each column */
    margin: 10px; /* Margin around each video */
    background: #f9f9f9; /* Light background for contrast */
    border-radius: 8px; /* Rounded corners */
    overflow: hidden; /* Hide overflow */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    transition: transform 0.3s; /* Smooth transform on hover */
}

.video-container:hover {
    transform: scale(1.03); /* Slightly enlarge on hover */
}

.video-container iframe {
    width: 100%; /* Full width of the container */
    height: 225px; /* Fixed height for uniformity */
    border: none; /* Remove default iframe border */
    border-radius: 8px; /* Match iframe corners to container */
}

@media (max-width: 768px) {
    .video-container {
        flex: 100%; /* Full width on smaller screens */
        margin: 10px 0; /* Adjust margin for better spacing */
    }
}









</style>

<!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Videos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Resources</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Videos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container text-center my-5" style="max-width:1000px;">
        <div class="container">
          <h1 style="font-size:50px;">Video to Educate</h3>
          <h4 style="font-weight:bold;">Level up investing knowledge!
            Watch our educational videos covering key investment topics, market trends, and
            helpful tips . empower your fnancial future start - Start Watching Now! 
          </h4> 

          
       
          <!----- 1st video section----->
          
<div style="display: flex; justify-content: space-between; max-width: 1200px; margin: auto;" class="my-5">
    <!-- Video 1 -->
    <div style="margin-right: 10px; flex: 1;" class="video-container">
        <iframe 
            width="100%" 
            height="225" 
            src="https://www.youtube.com/embed/dlFuDNnLqH8?list=PLgaMa5Lftpps5wHJgBcbSjn0fHI41zhsV" 
            frameborder="0" 
            allow="autoplay; encrypted-media" 
            allowfullscreen>
        </iframe>
    </div>

    <!-- Video 2 -->
    <div style="margin-right: 10px; flex: 1;" class="video-container">
        <iframe 
            width="100%" 
            height="225" 
            src="https://www.youtube.com/embed/MtHw-wuPXwc?list=PLgaMa5Lftpps5wHJgBcbSjn0fHI41zhsV" 
            frameborder="0" 
            allow="autoplay; encrypted-media" 
            allowfullscreen>
        </iframe>
    </div>

    <!-- Video 3 -->
    <div style="flex: 1;" class="video-container">
        <iframe 
            width="100%" 
            height="225" 
            src="https://www.youtube.com/embed/Jf3ILZmmt-k?list=PLgaMa5Lftpps5wHJgBcbSjn0fHI41zhsV" 
            frameborder="0" 
            allow="autoplay; encrypted-media" 
            allowfullscreen>
        </iframe>
    </div>


</div>

<!--xx--- 1st video section--xx--->


<!----- 2nd video section----->

<div style="display: flex; justify-content: space-between; max-width: 1200px; margin: auto;" class="my-5">
    <!-- Video 1 -->
    <div style="margin-right: 10px; flex: 1;" class="video-container">
        <iframe 
            width="100%" 
            height="225" 
            src="https://www.youtube.com/embed/dlFuDNnLqH8?list=PLgaMa5Lftpps5wHJgBcbSjn0fHI41zhsV" 
            frameborder="0" 
            allow="autoplay; encrypted-media" 
            allowfullscreen>
        </iframe>
    </div>

    <!-- Video 2 -->
    <div style="margin-right: 10px; flex: 1;" class="video-container">
        <iframe 
            width="100%" 
            height="225" 
            src="https://www.youtube.com/embed/MtHw-wuPXwc?list=PLgaMa5Lftpps5wHJgBcbSjn0fHI41zhsV" 
            frameborder="0" 
            allow="autoplay; encrypted-media" 
            allowfullscreen>
        </iframe>
    </div>

    <!-- Video 3 -->
    <div style="flex: 1;" class="video-container">
        <iframe 
            width="100%" 
            height="225" 
            src="https://www.youtube.com/embed/Jf3ILZmmt-k?list=PLgaMa5Lftpps5wHJgBcbSjn0fHI41zhsV" 
            frameborder="0" 
            allow="autoplay; encrypted-media" 
            allowfullscreen>
        </iframe>
    </div>


</div>
<!---xx--- 2nd video section---xx--->
 

</div>
</div> 


 <?php include('includes/footer.php'); ?>