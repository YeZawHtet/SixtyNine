@extends('layouts.app')

@section('nav-bar')
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">New</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Disposables</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">eliquid</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">kits</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Tanks</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Coils</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pods</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Clearance</a>
        </li>
    </ul>
@endsection

@section('hero')
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner  position-relative" style="height:90vh">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="{{ asset('images/vape1.png') }}" class="d-block w-100" alt="...">
                <div class="text-warning position-absolute bottom-50 end-50">
                    <h1 class="fw-bold mb-5">VOOPOO <br> VMATE PRO KIT</h1>
                    <p class="mb-5">Some representative placeholder content for the first slide.</p>
                    <button type="button" class="btn btn-outline-primary">Shop Now</button>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="{{ asset('images/vape2.png') }}" class="d-block w-100" alt="...">
                <div class="text-warning position-absolute bottom-50 end-50">
                    <h1 class="fw-bold mb-5">POPULAR KITS <br>
                        WITH FREE E-LIQUID</h1>
                    <p class="mb-5">Some representative placeholder content for the second slide.</p>
                    <button type="button" class="btn btn-outline-primary">Shop Now</button>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="{{ asset('images/vape1.png') }}" class="d-block w-100" alt="...">
                <div class="text-warning position-absolute bottom-50 end-50">
                    <h1 class="fw-bold mb-5">SERIOUSLY <br>
                        POD FILL E-LIQUID</h1>
                    <p class="mb-5">Some representative placeholder content for the third slide.</p>
                    <button type="button" class="btn btn-outline-primary">Shop Now</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection

@section('categories')
    <div class="container-fluid overflow-x-hidden p-5 text-center">
        <div class="text-center mb-5">
            <h2 class="mb-3 underline-before pb-3 fw-bold">Available Categories Here</h2>
        </div>
        <div class="row row-cols-2 row-cols-lg-5 g-5 g-lg-4 mb-5">
            <div>
                <div class="image-container">
                    <img src="{{ asset('images/vape1.png') }}" class="img-fluid rounded" alt="...">
                </div>
                <h3 class="text-center">
                    <a href="#" class="text-decoration-none text-dark">New</a>
                </h3>
            </div>
            <div>
                <div class="image-container">
                    <img src="{{ asset('images/vape2.png') }}" class="img-fluid rounded" alt="...">
                </div>
                <h3 class="text-center">
                    <a href="#" class="text-decoration-none text-dark">Disposables</a>
                </h3>
            </div>
            <div>
                <div class="image-container">
                    <img src="{{ asset('images/vape3.png') }}" class="img-fluid rounded" alt="...">
                </div>
                <h3 class="text-center">
                    <a href="#" class="text-decoration-none text-dark">Eliquid</a>
                </h3>
            </div>
            <div>
                <div class="image-container">
                    <img src="{{ asset('images/vape4.png') }}" class="img-fluid rounded" alt="...">
                </div>
                <h3 class="text-center">
                    <a href="#" class="text-decoration-none text-dark">Kits</a>
                </h3>
            </div>
            <div>
                <div class="image-container">
                    <img src="{{ asset('images/vape1.png') }}" class="img-fluid rounded" alt="...">
                </div>
                <h3 class="text-center">
                    <a href="#" class="text-decoration-none text-dark">Tanks</a>
                </h3>
            </div>
        </div>
    </div>
@endsection

@section('bestseller')
    <div class="container-fluid overflow-x-hidden bg-secondary py-5">
        <div class="text-center mb-5">
            <h2 class="mt-3 mb-3 fw-bold underline-before pb-3">Best Sellers</h2>
        </div>
        <div class="row row-cols-2 row-cols-lg-3 g-5 g-lg-5 text-center  p-3">
            <div>
                <div class="image-container">
                    <img src="{{ asset('images/vape1.png') }}" class="img-fluid rounded" alt="...">
                </div>
                <h3 class="text-center">
                    <a href="#" class="text-decoration-none text-dark">New</a>
                </h3>
            </div>
            <div>
                <div class="image-container">
                    <img src="{{ asset('images/vape2.png') }}" class="img-fluid rounded" alt="...">
                </div>
                <h3 class="text-center">
                    <a href="#" class="text-decoration-none text-dark">Disposables</a>
                </h3>
            </div>
            <div>
                <div class="image-container">
                    <img src="{{ asset('images/vape3.png') }}" class="img-fluid rounded" alt="...">
                </div>
                <h3 class="text-center">
                    <a href="#" class="text-decoration-none text-dark">Tanks</a>
                </h3>
            </div>
        </div>
    </div>
@endsection

@section('justarrive')
    <div class="container-fluid bg-dark text-warning pb-5">
        <div class="text-center mb-3">
            <h2 class="underline-before py-3 my-3 fw-bold">Just Arrive</h2>
        </div>
        <div class="row autoplay">
            <div class="m-3">
                <div class="image-container">
                    <img src="{{ asset('images/vape1.png') }}" class="img-fluid rounded" alt="...">
                </div>
                <h3 class="text-center">
                    <a href="#" class="text-decoration-none text-warning">New</a>
                </h3>
            </div>
            <div class="m-3">
                <div class="image-container">
                    <img src="{{ asset('images/vape1.png') }}" class="img-fluid rounded" alt="...">
                </div>
                <h3 class="text-center">
                    <a href="#" class="text-decoration-none text-warning">New</a>
                </h3>
            </div>
            <div class="m-3">
                <div class="image-container">
                    <img src="{{ asset('images/vape2.png') }}" class="img-fluid rounded" alt="...">
                </div>
                <h3 class="text-center">
                    <a href="#" class="text-decoration-none text-warning">Disposables</a>
                </h3>
            </div>
            <div class="m-3">
                <div class="image-container">
                    <img src="{{ asset('images/vape3.png') }}" class="img-fluid rounded" alt="...">
                </div>
                <h3 class="text-center">
                    <a href="#" class="text-decoration-none text-warning">Disposables</a>
                </h3>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('footer')
    <footer class="overflow-x-hidden">
        <div class="row row-cols-1 row-cols-lg-3 p-4 bg-primary">
            <div>
                <div class="shop-name">
                    <h3>Vape Shop</h3>
                </div>
                <div class="open-datetime"><span>Monday to Friday</span> <span>09:00 - 17:00</span></div>
                <div class="phone"><i class="fa-solid fa-phone"></i> Call Us: 09987654321</div>
                <div class="email"><i class="fa-solid fa-envelope"></i> Email Us: hello@gmail.com</div>
                <div class="row">
                    <div class="col-2"><i class="fa-brands fa-twitter"></i></div>
                    <div class="col-2"><i class="fa-brands fa-facebook-f"></i></div>
                    <div class="col-2"><i class="fa-brands fa-instagram"></i></div>
                </div>
            </div>
            <hr class="d-lg-none d-md-none">
            <div>
                <div class="shop-name">
                    <h3>Vape Shop</h3>
                </div>
                <div class="open-datetime"><span>Monday to Friday</span> <span>09:00 - 17:00</span></div>
                <div class="phone"><i class="fa-solid fa-phone"></i> Call Us: 09987654321</div>
                <div class="email"><i class="fa-solid fa-envelope"></i> Email Us: hello@gmail.com</div>
                <div class="row">
                    <div class="col-2"><i class="fa-brands fa-twitter"></i></div>
                    <div class="col-2"><i class="fa-brands fa-facebook-f"></i></div>
                    <div class="col-2"><i class="fa-brands fa-instagram"></i></div>
                </div>
            </div>
            <hr class="d-lg-none d-md-none">
            <div>
                <div class="shop-name">
                    <h3>Vape Shop</h3>
                </div>
                <div class="open-datetime"><span>Monday to Friday</span> <span>09:00 - 17:00</span></div>
                <div class="phone"><i class="fa-solid fa-phone"></i> Call Us: 09987654321</div>
                <div class="email"><i class="fa-solid fa-envelope"></i> Email Us: hello@gmail.com</div>
                <div class="row">
                    <div class="col-2"><i class="fa-brands fa-twitter"></i></div>
                    <div class="col-2"><i class="fa-brands fa-facebook-f"></i></div>
                    <div class="col-2"><i class="fa-brands fa-instagram"></i></div>
                </div>
            </div>
        </div>
    </footer>
@endsection
