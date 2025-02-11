<?php $this->load->view('template/navbar') ?>




<div class="main-content">
    <div class="card">
        <div class="container">
            <form id="formAddSchedule" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name">
                    <label for="name">Atas Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="select" class="form-control" id="tujuanAwal" name="tujuanAwal">
                    <option value="psn">Pasar Senen</option>
                    <option value="pst">Pasar Turi</option>
                    <label for="tujuanAwal">Dari Stasiun</label> 
                </div>
        </form>

        </div>
    </div>
</div>