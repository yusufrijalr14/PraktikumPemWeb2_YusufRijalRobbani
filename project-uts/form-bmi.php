<?php

include('layout/header.php');

include('layout/sidebar.php');

?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">UTS</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Menghitung Body Mass Index (BMI)</h3>
            </div>
            <form action="list-bmi.php" method="post" class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="pob" class="form-control" placeholder="Tempat Lahir" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" name="dob" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Berat Badan</label>
                        <div class="col-sm-10">
                            <input type="number" name="weight" class="form-control" placeholder="Berat Badan" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-10">
                            <input type="number" name="height" class="form-control" placeholder="Tinggi Badan" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="male" name="gender" value="male" checked>
                                <label for="male" class="form-check-label">Pria</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                                <label for="female" class="form-check-label">Wanita</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </section>
</div>

<?php

include('layout/footer.php');

?>