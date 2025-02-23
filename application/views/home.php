<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<?php $this->load->view('template/sidebar.php'); ?>
<?php $this->load->view('template/footer'); ?>
<style>
    .home-content {
        padding: 20px;
        background-color: rgb(229, 226, 226);
        min-height: 100vh;
        margin-left: 60px;
        transition: margin-left 0.3s ease;

    }

    .main-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .card-item {
        border-radius: 12px;
        padding: 20px;
        color: white;
        transition: all 0.3s ease;
        background: rgb(16, 173, 55);
    }

    .card-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .icon {
        font-size: 50px;
        margin-bottom: 15px;
    }

    .card-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .btn-card {
        background-color: rgba(255, 255, 255, 0.8);
        color: #333;
        border-radius: 8px;
        font-weight: bold;
        padding: 10px 20px;
        transition: all 0.3s ease;
    }

    .btn-card:hover {
        background-color: #fff;
        color: #007bff;
    }

    .carousel-inner {
        border-radius: 10px;
        overflow: hidden;
        max-height: 400px;
        /* Adjust this value based on your needs */
    }

    .carousel-item {
        height: 400px;
        /* Should match the max-height above */
    }

    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
</style>
<div class="home-content">
    <div class="main-card">
        <div class="container-header mb-4">
        </div>
        <div class="row g-4">

            <section id="hero" style="position:relative;">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.nationalgeographic.com/content/dam/expeditions/landing-pages/Rail/hero-rail-asia.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://pbs.twimg.com/media/EovBTPUXEAgDGUo.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.redd.it/u6rxthrum7c61.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="overlay-text" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: flex-start; padding-left: 50px;">
                    <div style="text-align: left; color: white; max-width: 400px">
                        <h1 style="font-size: 4rem; text-transform:inherit; font-weight:bold; letter-spacing: 2px">Welcome to Argo Ngawi</h1>
                        <p style="font-size: 1.5rem; line-height: 1.5;">Get the best train experience with us</p>
                    </div>
                </div>
            </section>
            <div class="col-md-4">
                <div class="card card-item text-center">
                    <div class="icon">
                        <i class="fas fa-train"></i>
                    </div>
                    <h5 class="card-title">Add Train Schedule</h5>
                    <button class="btn btn-card mt-3" onclick="addSchedule()">Add Schedule</button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-item text-center" style="background: rgb(28, 107, 255);">
                    <div class="icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h5 class="card-title">View Train Schedule</h5>
                    <button class="btn btn-card mt-3">View Schedule</button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-item text-center" style="background:rgb(50, 50, 51);">
                    <div class="icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h5 class="card-title">Manage Schedule</h5>
                    <button class="btn btn-card mt-3">Manage</button>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script>

    function addSchedule() {
        $.ajax({
            url('<?= base_url(uri_string() . '/loadTrainModal') ?>'),
            method: 'post',
            datatype: 'json',
            success: function(response) {
                if (response.status == 'OK') {
                    $('#form-data').html(response.CONTENT);
                    $('#form-data').modal('show');
                } else {
                    Swal.fire({
                        icon: 'error',
                        tittle: 'Error',
                        Text: response.MESSAGE
                    });
                }
            },
        });

    }
</script>