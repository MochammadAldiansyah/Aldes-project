   <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">

       <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="{{ route('landing') }}">
           <div class="text-warning">App</div>
           <div class="text-1000">Lab</div>
        </a>
        <button class="navbar-toggler collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0 " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0  " >
              <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="#home">Home</a></li>
              <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#features">Key Features</a></li>
              <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#pricing">Pricing</a></li>
              <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#testimonial">Testimonial</a></li>
              <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#faq">FAQ</a></li>
            </ul>
            <span class="ps-lg-5">
              <a class="btn btn-lg btn-primary rounded-pill order-0" href="{{ route('login') }}">Try for free</a>
            </span>
        </div>
    </div>
</nav>
