@extends('tamplate.layout')



@section('content')

    <div class="container">
        <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->


        <!-- About Start -->
    <div class="container-xxl py-6" id="about">
            <div class="container">
                <div class="row g-5">
    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="d-flex align-items-center mb-5">
        <h2 class="lh-base mb-0">Visi & Misi</h2>
    </div>
    <h3 class="mb-4"><b>Visi : </b></h3>
    @isset ($visis)
    @foreach ($visis as $v)
    <p class="mb-4"><i class="far fa-check-circle text-success me-3"></i>{{ $v->isi }}</p> <!-- Menampilkan teks visi dari database -->
    @endforeach
@else
    <p>Belum ada visi yang ditentukan.</p>
@endif
    <br><br>
    <h3 class="mb-4"><b>Misi : </b></h3>
    @foreach ($misis as $m)
    <p class="mb-4"><i class="far fa-check-circle text-success me-3"></i>{{ $m->isi }}</p> <!-- Menampilkan teks visi dari database -->
    @endforeach
</div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row g-3 mb-4">
                            <div class="col-sm-6">
                                <img class="img-fluid rounded" src="{{ asset('storage/images/' . $bupati->foto) }}" width="260px" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid rounded" src="{{ asset('storage/images/' . $wakil_bupati->foto) }}" width="260px" alt="">
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="border-end pe-3 me-3 mb-0">{{$bupati->nama}}</h5>
                            <h2 class="text-primary fw-bold mb-0">Calon {{$bupati->calon_role}}</h2>
                        </div>
                        <p class="mb-4">{{$bupati->deskripsi}}</p>
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="border-end pe-3 me-3 mb-0">{{$wakil_bupati->nama}}</h5>
                            <h2 class="text-primary fw-bold mb-0">Calon {{$wakil_bupati->calon_role}}</h2>
                        </div>
                        <p class="mb-0">{{$wakil_bupati->deskripsi}}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Expertise Start -->
        <div class="container-xxl py-6 pb-5" id="skill">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="display-5 mb-5">Profil Paslon Bupati dan Wakil Bupati</h1>
                        <div class="container-xxl py-6 pb-5" id="team">
                            <div class="container">
                                <div class="row g-4">
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="team-item position-relative">
                                            <img class="img-fluid rounded" width="90%" src="{{ asset('storage/images/' . $bupati->foto) }}" alt="">
                                            <div class="team-text bg-white rounded-end p-4">
                                                <div>
                                                    <h5>{{$bupati->nama}}</h5>
                                                    <span>Calon {{$bupati->calon_role}}</span>
                                                </div>
                                                <a href="{{route('paslon.bupati')}}"><i class="fa fa-arrow-right fa-2x text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="team-item position-relative">
                                            <img class="img-fluid rounded" width="90%" src="{{ asset('storage/images/' . $wakil_bupati->foto) }}" alt="">
                                            <div class="team-text bg-white rounded-end p-4">
                                                <div>
                                                    <h5>{{$wakil_bupati->nama}}</h5>
                                                    <span>Calon {{$wakil_bupati->calon_role}}</span>
                                                </div>
                                               
                                                <a href="{{route('paslon.wakil.bupati')}}"><i class="fa fa-arrow-right fa-2x text-primary"></i></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <!-- Expertise End -->


        <!-- Service Start -->
        <div class="container-fluid bg-light my-5 py-6" id="service">
            <div class="container">
                <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">Program</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <a class="btn btn-primary py-3 px-5" href="">Lainnya</a>
                    </div>
                </div>
                <div class="row g-4">
                    @if (isset($programs))
                        @foreach ($programs as $p)
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                                    <div class=" flex-shrink-0 mb-3">
                                        {{-- <i class="fa fa-laptop-code fa-2x text-dark"></i> --}}
                                        <a href="{{ asset('storage/images/' . $p->gambar) }}">
                                            <img src="{{ asset('storage/images/' . $p->gambar) }}" alt="{{ $p->judul }}" style="width: 200px;">
                                        </a>
                                    </div>
                                    <div class="ms-sm-4">
                                        <h4 class="mb-3">{{$p->judul}}</h4>
                                        {{-- <h6 class="mb-3">Start from <span class="text-primary">$199</span></h6> --}}
                                        <span>{{$p->keterangan}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h3>Belum Ditentukan</h3>
                    @endif
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Projects Start -->
        <div class="container-xxl py-6 pt-5" id="project">
            <div class="container">
                <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">Galeri</h1>
                    </div>
                    <!-- <div class="col-lg-6 text-lg-end">
                        <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                            <li class="mx-3 active" data-filter="*">All Projects</li>
                            <li class="mx-3" data-filter=".first">UI/UX Design</li>
                            <li class="mx-3" data-filter=".second">Graphic Design</li>
                        </ul>
                    </div> -->
                </div>
                <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                    @foreach ($galeri as $g)
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="{{ asset('images/' . $g->path) }}" alt="" width="700px" height="700px">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="{{ asset('images/' . $g->path) }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Projects End -->

        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <br><br><br><br><br>

        <!-- Team Start -->
        <div class="container-xxl py-6 pb-5" id="team">
            <div class="container">
                <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">Team Members</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <a class="btn btn-primary py-3 px-5" href="">Contact Us</a>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded" src="img/team-1.jpg" alt="">
                            <div class="team-text bg-white rounded-end p-4">
                                <div>
                                    <h5>Full Name</h5>
                                    <span>Designer</span>
                                </div>
                                <i class="fa fa-arrow-right fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded" src="img/team-2.jpg" alt="">
                            <div class="team-text bg-white rounded-end p-4">
                                <div>
                                    <h5>Full Name</h5>
                                    <span>Designer</span>
                                </div>
                                <i class="fa fa-arrow-right fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded" src="img/team-3.jpg" alt="">
                            <div class="team-text bg-white rounded-end p-4">
                                <div>
                                    <h5>Full Name</h5>
                                    <span>Designer</span>
                                </div>
                                <i class="fa fa-arrow-right fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-fluid bg-light py-5 my-5" id="testimonial">
            <div class="container-fluid py-5">
                <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Testimonial</h1>
                <div class="row justify-content-center">
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="testimonial-left h-100">
                            <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="img/testimonial-1.jpg" alt="">
                            <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="img/testimonial-2.jpg" alt="">
                            <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="img/testimonial-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="testimonial-item text-center">
                                <div class="position-relative mb-5">
                                    <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="img/testimonial-1.jpg" alt="">
                                    <div class="testimonial-icon">
                                        <i class="fa fa-quote-left text-primary"></i>
                                    </div>
                                </div>
                                <p class="fs-5 fst-italic">Saya sangat terkesan dengan program kerja
                                     yang ditawarkan. Mereka memiliki visi
                                      yang jelas untuk memajukan daerah kita, terutama dalam bidang 
                                      pendidikan dan kesehatan. Saya yakin mereka akan membawa perubahan positif bagi masyarakat.

                                </p>
                                <hr class="w-25 mx-auto">
                                <h5>Andika</h5>
                                <span>Guru</span>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="position-relative mb-5">
                                    <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="img/testimonial-2.jpg" alt="">
                                    <div class="testimonial-icon">
                                        <i class="fa fa-quote-left text-primary"></i>
                                    </div>
                                </div>
                                <p class="fs-5 fst-italic">Mereka adalah pasangan yang ideal untuk memimpin daerah ini. Mereka memili
                                    ki pengalaman yang luas dan selalu mendengarkan aspirasi rakyat. Program pertanian yang me
                                    reka usulkan sangat relevan dan dibutuhkan oleh para petani kita.</p>
                                <hr class="w-25 mx-auto">
                                <h5>Budiman</h5>
                                <span>Petani</span>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="position-relative mb-5">
                                    <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="img/testimonial-3.jpg" alt="">
                                    <div class="testimonial-icon">
                                        <i class="fa fa-quote-left text-primary"></i>
                                    </div>
                                </div>
                                <p class="fs-5 fst-italic">Saya sangat mendukung pencalonan mereka.
                                     Mereka telah membuktikan diri sebagai pemimpin yang jujur dan bekerja keras.
                                      Saya yakin di bawah kepemimpinan mereka, ekonomi daerah kita akan semakin berkembang..</p>
                                <hr class="w-25 mx-auto">
                                <h5>Rudi Santoso</h5>
                                <span>Pengusaha</span>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="position-relative mb-5">
                                    <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="img/testimonial-3.jpg" alt="">
                                    <div class="testimonial-icon">
                                        <i class="fa fa-quote-left text-primary"></i>
                                    </div>
                                </div>
                                <p class="fs-5 fst-italic">Mereka adalah kombinasi sempurna antara pengalaman dan inovasi. Program pengembangan 
                                    infrastruktur yang mereka ajukan sangat dibutuhkan untuk meningkatkan aksesibilitas di daerah kita. 
                                    Saya optimis mereka akan membawa perubahan yang positif.</p>
                                <hr class="w-25 mx-auto">
                                <h5>Dimas Wijaya</h5>
                                <span>Insinyur</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="testimonial-right h-100">
                            <h1></h1>
                            <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="img/testimonial-1.jpg" alt="">
                            <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="img/testimonial-2.jpg" alt="">
                            <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="img/testimonial-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-xxl pb-5" id="contact">
            <div class="container py-5">
                <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">Berikan masukan Anda melalui kontak kami : </h1>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="mb-2">My office:</p>
                        <h3 class="fw-bold">{{$official->alamat}}</h3>
                        <hr class="w-100">
                        <p class="mb-2">Call me:</p>
                        <h3 class="fw-bold">{{$official->nomor_telepon}}</h3>
                        <hr class="w-100">
                        <p class="mb-2">Mail me:</p>
                        <h3 class="fw-bold">{{$official->email}}</h3>
                        <hr class="w-100">
                        <p class="mb-2">Ikuti Kami:</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-primary me-2" href="{{$official->twitter}}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary me-2" href="{{$official->facebook}}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary me-2" href="{{$official->youtube}}"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-primary me-2" href="{{$official->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Map Start -->
        <div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container-xxl pt-5 px-0">
                <div class="bg-dark">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <!-- Map End -->


        <!-- Copyright Start -->
        <div class="container-fluid bg-dark text-white py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom text-secondary" href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom text-secondary" href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
    </div>

@endsection