@extends('layouts.base')
@section('content')
<body>
    @include('header')

    <div class="container sections-wrapper py-5">
        <div class="row">
            <div class="primary col-lg-8 col-12">
                <section class="about section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Acerca de mí</h2>
                        <div class="content">
                            <p>Soy ingeniero de sistemas, enfocado en el desarrollo web, con capacidades Full-Stack de tecnologías actuales, creando y manteniendo proyectos para empresas potenciales, desarrollos a medida, ECommerce.</p>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

               <section class="latest section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Últimos Proyectos</h2>
                        <div class="content">

                            {{-- <div class="item featured text-center">

                                <div class="featured-image has-ribbon">
                                    <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/launch-bootstrap-4-template-for-saas-businesses/" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm" src="assets/images/projects/project-featured.jpg" alt="project name" />
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">New</div>
                                    </div>
                                </div>

                                <h3 class="title mb-3"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/launch-bootstrap-4-template-for-saas-businesses/" target="_blank">Launch - The perfect Bootstrap template for SaaS products</a></h3>

                                <div class="desc text-start">
                                    <p>You can promote your main project here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                                </div><!--//desc-->
                                <a class="btn btn-cta-secondary" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/launch-bootstrap-4-template-for-saas-businesses/" target="_blank"><i class="fas fa-thumbs-up"></i> Back my project</a>
                            </div><!--//item-->
                            <hr class="divider" />
                            <div class="item row">
                                <a class="col-md-4 col-12" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-4-startup-template-for-software-projects/" target="_blank">
                                <img class="img-fluid project-image rounded shadow-sm" src="assets/images/projects/project-1.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-4-startup-template-for-software-projects/" target="_blank">CoderPro - Boootstrap Startup Template For Software Projects</a></h3>
                                    <p class="mb-2">You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p><a class="more-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-4-startup-template-for-software-projects/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                </div><!--//desc-->
                            </div><!--//item-->

                            <div class="item row">
                                <a class="col-md-4 col-12" href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/devcard-bootstrap-4-vcard-portfolio-template-for-software-developers/" target="_blank">
                                <img class="img-fluid project-image rounded shadow-sm" src="assets/images/projects/project-2.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/devcard-bootstrap-4-vcard-portfolio-template-for-software-developers/" target="_blank">DevCard - Boootstrap Portfolio Template for Software Developers</a></h3>
                                    <p class="mb-2">You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p><a class="more-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/devcard-bootstrap-4-vcard-portfolio-template-for-software-developers/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                </div><!--//desc-->
                            </div><!--//item-->

                             <div class="item row">
                                <a class="col-md-4 col-12" href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/instance-bootstrap-portfolio-theme-for-developers/" target="_blank">
                                <img class="img-fluid project-image rounded shadow-sm" src="assets/images/projects/project-3.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/instance-bootstrap-portfolio-theme-for-developers/" target="_blank">Instance - Boootstrap Portfolio Template for Aspiring Full Stack Developers</a></h3>
                                    <p class="mb-2">You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p><a class="more-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/instance-bootstrap-portfolio-theme-for-developers/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                </div><!--//desc-->
                            </div><!--//item-->

                            <div class="item row">
                                <a class="col-md-4 col-12" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/bootstrap-template-for-mobile-apps-nova-pro/" target="_blank">
                                <img class="img-fluid project-image rounded shadow-sm" src="assets/images/projects/project-4.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/bootstrap-template-for-mobile-apps-nova-pro/" target="_blank">Nova Pro - Boootstrap Template for Mobile Startups</a></h3>
                                    <p class="mb-2">You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus.</p>
                                    <p><a class="more-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/bootstrap-template-for-mobile-apps-nova-pro/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                </div><!--//desc-->
                            </div><!--//item-->
                            <div class="item row">
                                <a class="col-md-4 col-12" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devstudio-bootstrap-theme-for-web-development-agencies-and-developers/" target="_blank">
                                <img class="img-fluid project-image rounded shadow-sm" src="assets/images/projects/project-5.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devstudio-bootstrap-theme-for-web-development-agencies-and-developers/" target="_blank">DevStudio - Boootstrap Template for WebDev Agencies and Freelance Developers</a></h3>
                                    <p class="mb-2"> You can put one of your secondary projects here. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                                    <p><a class="more-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devstudio-bootstrap-theme-for-web-development-agencies-and-developers/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                </div><!--//desc-->
                            </div><!--//item--> --}}

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

                <section class="projects section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Otros Proyectos</h2>
                        <div class="content">
                            {{-- <div class="item">
                                <h3 class="title"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/free-bootstrap4-resume-cv-template-for-developers-pillar/" target="_blank">Pillar - Free Boootstrap Resume/CV Template for Developers</a> <span class="badge badge-theme">Free</span></h3>
                                <p class="summary">Provide a brief description of your project. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatu.</p>
                                <p><a class="more-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/free-bootstrap4-resume-cv-template-for-developers-pillar/" target="_blank"><i class="fas fa-external-link-alt"></i>Download Now</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/speciality/devblog-free-bootstrap-4-blog-template-for-developers/" target="_blank">DevBlog - Free Boootstrap Blog Template for Developers</a> <span class="badge badge-theme">Free</span></h3>
                                <p class="summary">Provide a brief description of your project. Maecenas ornare ultricies risus, in fermentum augue consectetur in. Vestibulum vitae mauris iaculis, sollicitudin velit in, molestie nulla. </p>
                                <p><a class="more-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/speciality/devblog-free-bootstrap-4-blog-template-for-developers/" target="_blank"><i class="fas fa-external-link-alt"></i>Download Now</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/nova-bootstrap-landing-page-template-for-mobile-apps/" target="_blank">Nova - Free App Landing Page Template for App Developers</a> <span class="badge badge-theme">Free</span></h3>
                                <p class="summary">Provide a brief description of your project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel purus enim. Etiam tortor felis, fermentum ac ultrices sed.</p>
                                <p><a class="more-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/nova-bootstrap-landing-page-template-for-mobile-apps/" target="_blank"><i class="fas fa-external-link-alt"></i>Download Now</a></p>
                            </div><!--//item--> --}}

                            <a class="btn btn-cta-secondary" href="https://github.com/sebasroldanm">Más en GitHub <i class="fas fa-chevron-right pt-1"></i></a>

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

                <section class="experience section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Experiencia laboral</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Desarrollador Junior - <span class="place"><a href="#">Herfox Company</a></span> <span class="year">(2020 - Presente)</span></h3>
                                <p>Parte del equipo de desarrollo, desempeñando el cargo de desarrollador junior FullStack. Manejo de Confluece, Bitbucket y Jira para la
                                    administración, formalización y documentación de requerimientos, control de cambios, plan
                                    de pruebas, presentación de requerimientos y análisis de tiempo-esfuerzo estimado como
                                    también uso de UML para modelación de arquitectura del Software o características a
                                    desarrollar.
                                    <br>Manejo de Laravel con
                                    Blade y Laravel Mix con Vue, usando bases de datos como SQL Server, MongoDB para
                                    proyectos de participación de alta concurrencia, MySQL y PostgreSQL.</p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Equipo de Desarrollo, CIT - <span class="place"><a href="#">Universidad de Cundinamarca</a></span> <span class="year">(2019 - 2020)</span></h3>
                                <p>Parte del equipo del equipo de desarrollo en las instalaciones del CIT (Centro de Innovación y
                                    Tecnología) de la Universidad de Cundinamarca, extensión de Facatativá, donde se realizaron
                                    actividades que van desde tutorías hasta seguimiento y control a los estándares de calidad y
                                    codificación en proyectos de grado que estén en construcción. El cargo constituye en mantener
                                    esos estándares de codificación dentro de los proyectos de grado en curso y dar inducción de
                                    las tecnologías implementadas como es el Framework Laravel. <br>Como también, mantener el estándar de normalización de la base de datos
                                    MySQL. De igual forma, una las funciones primordiales son las tutorías sobre la normativa de
                                    codificación y normalización de Bases de Datos siguiendo el protocolo estándar impartido por
                                    la Universidad para así contribuir con un ambiente de desarrollo íntegro y entendible además,
                                    validando proyectos mediante el cumplimiento de requerimientos de los objetivos para luego
                                    dejaros en funcionamiento dentro de las instalaciones del CIT usando servicios de Digital
                                    Ocena, por ende, adquirí conocimientos para el despliegue y configuración de servidores Linux
                                    para su puesta en producción.</p>
                            </div><!--//item-->

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->
                {{-- <section class="github section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">My GitHub</h2>
                        <p>You can embed your GitHub contribution graph calendar using IonicaBizau's <a href="https://github.com/sebasroldanm/github-calendar" target="_blank">GitHub Calendar</a> widget.

                        <div id="github-graph" class="github-graph">

                        </div><!--//github-graph-->

                        <p>You can also embed your GitHub activities using Casey Scarborough's <a href="https://github.com/caseyscarborough/github-activity" target="_blank">GitHub Activity Stream</a> widget.
                        <!--//Usage: https://caseyscarborough.com/projects/github-activity/ -->
                        <div id="ghfeed" class="ghfeed">
                        </div><!--//ghfeed-->

                    </div><!--//secton-inner-->
                </section><!--//section--> --}}
            </div><!--//primary-->
            <div class="secondary col-lg-4 col-12">
                 <aside class="info aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading sr-only">Información Básica</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-map-marker-alt"></i><span class="sr-only">Ubicación:</span>Facatativá, Cundinamarca, Colombia</li>
                                <li><i class="fas fa-envelope"></i><span class="sr-only">Email:</span><a href="#">sebasroldanm@gmail.com</a></li>
                                {{-- <li><i class="fas fa-link"></i><span class="sr-only">Website:</span><a href="#">https://www.website.com</a></li> --}}
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//aside-->

                <aside class="skills aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Skills</h2>
                        <div class="content">
                            <p class="intro">
                                Estas son las capacidades adquiridas mediante modalidad de trabajo como también crecimiento personal e interés por nuevas tecnólogas.</p>

                            <div class="skillset">

                                <div class="item">
                                    <h3 class="level-title">php<span class="level-label" data-bs-toggle="tooltip" data-bs-placement="left" title="Experiencia de 2 años, usando versiones desde 5.6 - 7.0 - 7.4 - 8.1 y Framework Laravel junto con CMS WordPress, Prestashop y Shopify"><i class="fas fa-info-circle"></i>Alto</span></h3>

                                    <div class="level-bar progress">
									    <div class="progress-bar level-bar-inner" role="progressbar" style="width: 75%" aria-valuenow="75"  aria-valuemin="0" aria-valuemax="96"></div>
									</div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Javascript &amp; jQuery<span class="level-label" data-bs-toggle="tooltip" data-bs-placement="left" title="Experiencia de 2 años"><i class="fas fa-info-circle"></i>Alto</span></h3>
                                    <div class="level-bar progress">
									    <div class="progress-bar level-bar-inner" role="progressbar" style="width: 70%" aria-valuenow="70"  aria-valuemin="0" aria-valuemax="96"></div>
									</div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">HTML5, CSS3 &amp; SASS<span class="level-label" data-bs-toggle="tooltip" data-bs-placement="left" title="Uso de Framework Boootstrap y Tailwind"><i class="fas fa-info-circle"></i>Intermedio</span></h3>
                                    <div class="level-bar progress">
									    <div class="progress-bar level-bar-inner" role="progressbar" style="width: 93%" aria-valuenow="93"  aria-valuemin="0" aria-valuemax="96"></div>
									</div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Dart<span class="level-label" data-bs-toggle="tooltip" data-placement="left" title="Conociminetos elementales para el uso de Flutter"><i class="fas fa-info-circle"></i>Báasico</span></h3>
                                    <div class="level-bar progress">
									    <div class="progress-bar level-bar-inner" role="progressbar" style="width: 60%" aria-valuenow="60"  aria-valuemin="0" aria-valuemax="96"></div>
									</div><!--//level-bar-->
                                </div><!--//item-->

                                <p><a class="more-link" href="https://github.com/sebasroldanm"><i class="fas fa-external-link-alt"></i>Más en GitHub</a></p>
                            </div>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                {{-- <aside class="testimonials aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Testimonials</h2>
                        <div class="content">
                            <div class="item">
                                <blockquote class="quote">
                                    <p><i class="fas fa-quote-left"></i>James is an excellent software engineer and he is passionate about what he does. You can totally count on him to deliver your projects!</p>
                                </blockquote>
                                <p class="source"><span class="name">Tim Adams</span><br /><span class="title">Curabitur commodo</span></p>
                            </div><!--//item-->

                            <p><a class="more-link" href="#"><i class="fas fa-external-link-alt"></i>More on Linkedin</a></p>

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section--> --}}

                <aside class="education aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Educación</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> Curso Prestashop</h3>
                                <h4 class="university">Udemy <span class="year">(2021)</span></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> Curso Angular 9</h3>
                                <h4 class="university">Universidad de Cundinamarca <span class="year">(2020)</span></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> Ingeniería de Sistemas</h3>
                                <h4 class="university">Universidad de Cundinamarca <span class="year">(2015-2020)</span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="languages aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Idiomas</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li class="item">
                                    <span class="title"><strong>Esapñol:</strong></span>
                                    <span class="level">Hablante nativo <br class="visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                                </li><!--//item-->
                                <li class="item">
                                    <span class="title"><strong>Spanish:</strong></span>
                                    <span class="level">Habilidad profesional <br class="visible-sm visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half"></i></span>
                                </li><!--//item-->
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                {{-- <aside class="blog aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Latest Blog Posts</h2>
                        <p>You can use Sascha Depold's <a href="https://github.com/sdepold/jquery-rss" target="_blank">Vanilla RSS plugin</a> to pull in your blog post feeds.</p>
                        <div id="rss-feeds" class="content">

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section--> --}}

                {{-- <aside class="list music aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Favourite coding music</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                <li><i class="fas fa-headphones"></i> <a href="#">Ut sollicitudin in mauris non auctor</a></li>
                                <li><i class="fas fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                <li><i class="fas fa-headphones"></i> <a href="#">Duis et felis bibendum</a></li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section--> --}}

                {{-- <aside class="list conferences aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Conferences</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="far fa-calendar-alt"></i> <a href="#" target="_blank">WWDC 2030</a> (San Francisco)</li>
                                <li><i class="far fa-calendar-alt"></i> <a href="#">Hive</a> (Seattle)</li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section--> --}}

                {{-- <aside class="credits aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Credits</h2>
                        <div class="content">
                            <ul class="list-unstyled pb-2">
                                <li><a href="https://getbootstrap.com/" target="_blank"><i class="fas fa-external-link-alt"></i>Bootstrap</a></li>
                                <li><a href="https://fortawesome.github.io/Font-Awesome/" target="_blank"><i class="fas fa-external-link-alt"></i>FontAwesome</a></li>
                                <li><a href="https://github.com/IonicaBizau/github-calendar" target="_blank"><i class="fas fa-external-link-alt"></i>GitHub Calendar Plugin</a></li>

                                <li><a href="https://caseyscarborough.com/projects/github-activity/" target="_blank"><i class="fas fa-external-link-alt"></i>GitHub Activity Stream</a></li>

                                <li><a href="https://github.com/sdepold/vanilla-rss" target="_blank"><i class="fas fa-external-link-alt"></i>Vanilla RSS</a></li>
                                <li><a href="https://github.com/coliff/dark-mode-switch"><i class="fas fa-external-link-alt"></i>Dark Mode Switch</a></li>

                            </ul>

                            <hr/>

                             <p class="pt-2">This Boootstrap portfolio template is handcrafted by UX designer <a href="https://twitter.com/3rdwave_themes" target="_blank">Xiaoying Riley</a> at <a href="https://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a> for developers and is <strong>FREE</strong> as long as you keep the footer attribution link.</p>
                             <p>If you’d like to <strong>use this template without the attribution link</strong>, you can <a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/free-bootstrap-portfolio-theme-for-web-developers/" target="_blank">buy the commercial license</a>.</p>

                             <a class="btn btn-cta-primary btn-download" href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/free-bootstrap-portfolio-theme-for-web-developers/" target="_blank"><i class="fas fa-download"></i> I want to download</a>
                            <hr/>
                            <h5 class="subheading pt-3">Want more free Bootstrap themes and templates?</h5>
                            <p>Check out our <a href="https://themes.3rdwavemedia.com/bootstrap-templates/free/">collection of free themes and templates.</a></p>
                            <p>Follow <a href="https://twitter.com/3rdwave_themes" target="_blank">Xiaoying</a> on twitter so you don't miss any future freebies!</p>

                            <a class="btn btn-cta-secondary btn-follow" href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fab fa-twitter"></i> Follow on twitter</a>

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section--> --}}

            </div><!--//secondary-->
        </div><!--//row-->
    </div><!--//masonry-->

    <!-- ******FOOTER****** -->
    <footer class="footer">
        <div class="container text-center">
                <!--/* This template is free as long as you keep the attribution link below. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Diseñado con <i class="fas fa-heart"></i> por <a href="#" target="_blank">Sebastian Roldan</small>
        </div><!--//container-->
    </footer><!--//footer-->

    <!-- Javascript -->
    <script type="text/javascript" src="assets/plugins/popper.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/vanilla-rss/dist/rss.global.min.js"></script>
    <script type="text/javascript" src="assets/plugins/dark-mode-switch/dark-mode-switch.min.js"></script>
    <!-- github calendar plugin -->
    <script type="text/javascript" src="assets/plugins/github-calendar/dist/github-calendar.min.js"></script>
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-activity/src/github-activity.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>
@endsection
