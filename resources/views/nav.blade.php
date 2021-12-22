<!-- ******HEADER****** -->
<header class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <a href="{{ url('/') }}">
                    <img class="profile-image img-fluid float-start rounded-circle" src="{{ URL::to('/') }}/storage/images/Xsahxb8xfsd.jpg" alt="profile image" />
                </a>
                <div class="profile-content">
                    <h1 class="name">Sebastian Roldan</h1>
                    <h2 class="desc">Web Developer</h2>
                    <ul class="social list-inline">
                        {{-- <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li> --}}
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/sebastian-roldan-15a76a147/"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/sebasroldanm"><i class="fab fa-github-alt"></i></a></li>
                        {{-- <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow"></i></a></li>
                        <li class="list-inline-item last-item"><a href="#"><i class="fab fa-codepen"></i></a></li> --}}
                    </ul>
                </div><!--//profile-->
            </div><!--//col-->
            <div class="col-12 col-md-auto">
                <div class="dark-mode-switch d-flex">
                    <div class="form-check form-switch mx-auto mx-md-0">
                        <input type="checkbox" class="form-check-input me-2" id="darkSwitch" />
                        <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
                    </div>
                </div><!--//dark-mode-switch-->
                <a class="btn btn-cta-secondary" href="/documentation"><i class="fas fa-file-alt"></i> Documentación</a>
                <a class="btn btn-cta-primary" href="#" target="_blank"><i class="fas fa-paper-plane"></i> Contáctame</a>
            </div><!--//col-->
        </div><!--//row-->
    </div><!--//container-->
</header><!--//header-->
