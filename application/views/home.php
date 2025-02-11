<?php $this->load->view('template/navbar.php'); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<style>
    .home-content {
        padding: 20px;
        background-color: #f0f2f5;
        min-height: 100vh;
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
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
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
</style>

<div class="home-content">
    <div class="main-card">
        <div class="container-header mb-4">
        </div>
        <div class="row g-4">
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
                <div class="card card-item text-center" style="background: linear-gradient(135deg, #ff7e5f 0%, #feb47b 100%);">
                    <div class="icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h5 class="card-title">View Train Schedule</h5>
                    <button class="btn btn-card mt-3">View Schedule</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-item text-center" style="background: linear-gradient(135deg, #43cea2 0%, #185a9d 100%);">
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

<?php include('modal.php') ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
   function addSchedule()
   {
    <?= base_url(uri_string() . 'addSchedule') ?>
   }
</script>