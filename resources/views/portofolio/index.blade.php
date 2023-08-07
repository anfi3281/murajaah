<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anfee - Say Hi!</title>

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- My CSS --}}
    <link rel="stylesheet" href="/portofolio/style.css">

</head>

<body id="home">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Anfee</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Akhir Navbar --}}

    {{-- Jumbotron --}}
    <section class="jumbotron text-center">
        <img src="/portofolio/img/anfee.jpg" alt="Randi Afif" width="200" class="rounded-circle img-thumbnail">
        <h1 class="display-4">Randi Afif</h1>
        <p class="lead">Mahasiswa IT | Pembelajar</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,192L48,176C96,160,192,128,288,106.7C384,85,480,75,576,85.3C672,96,768,128,864,154.7C960,181,1056,203,1152,197.3C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    {{-- Akhir Jumbotron --}}

    {{-- About --}}
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <div class="h2">About Me</div>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4 mb-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero aperiam expedita corrupti officiis
                        iure non eaque nesciunt maiores at quidem.</p>
                </div>
                <div class="col-md-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium facilis tempora eligendi
                        soluta laboriosam quaerat et deserunt, dolor reprehenderit vel voluptas quia rerum dolores!
                        Tempora!</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#e2edff" fill-opacity="1"
                d="M0,288L48,272C96,256,192,224,288,208C384,192,480,192,576,192C672,192,768,192,864,176C960,160,1056,128,1152,117.3C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    {{-- Akhir About --}}

    {{-- Projects --}}
    <section id="projects">
        <div class="container">
            <div class="row text-center">
                <div class="col mb-4">
                    <h2>My Projects</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="/portofolio/img/projects/1.jpg" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="/portofolio/img/projects/2.jpg" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="/portofolio/img/projects/4.jpg" class="card-img-top" alt="Project 4">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="/portofolio/img/projects/5.jpg" class="card-img-top" alt="Project 5">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="/portofolio/img/projects/3.jpg" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,224L48,197.3C96,171,192,117,288,101.3C384,85,480,107,576,96C672,85,768,43,864,53.3C960,64,1056,128,1152,160C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    {{-- Akhir Projects --}}

    {{-- Contact --}}
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn mt-5 btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0d6efd" fill-opacity="1"
                d="M0,224L48,213.3C96,203,192,181,288,176C384,171,480,181,576,202.7C672,224,768,256,864,266.7C960,277,1056,267,1152,245.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    {{-- Akhir Contact --}}

    {{-- Footer --}}
    <footer class="bg-primary text-light text-center pb-5">
        <p>Created with <i class="bi bi-arrow-through-heart-fill text-danger"></i> by <a
                href="https://www.instagram.com/hyhehehe123/" class="text-light fw-bold">Anfee</a></p>
    </footer>
    {{-- Akhir Footer --}}

</body>

</html>
