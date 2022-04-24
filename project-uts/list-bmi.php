<?php

require_once 'BMIPasien.php';

include('layout/header.php');

include('layout/sidebar.php');

$name = $_POST['name'];
$pob = $_POST['pob'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$weight = $_POST['weight'];
$height = $_POST['height'];

$pasien = new BMIPasien($name, $pob, $dob, $email, $gender, $weight, $height);

$dataBMI = $pasien->bmi;

$dataPasien = $pasien->pasien;

$weightFormat = number_format($dataBMI->weight, 1);

$pasien1 = ['date' => '2022-01-10', 'name' => 'Ahmad', 'pob' => "Jakarta", 'dob' => "1999-01-01", 'email' => 'ahmad@mail.com', 'gender' => "L", 'weight' => 69.8, 'height' => 169, 'bmi' => 24.7, 'status' => 'Kelebihan Berat Badan'];

$pasien2 = ['date' => '2022-01-10', 'name' => 'Rina', 'pob' => "Depok", 'dob' => "1999-02-02", 'email' => 'rina@mail.com', 'gender' => "P", 'weight' => 55.3, 'height' => 165, 'bmi' => 20.3, 'status' => 'Normal (Ideal)'];

$pasien3 = ['date' => '2022-01-10', 'name' => 'Lutfi', 'pob' => "Bogor", 'dob' => "1999-03-03", 'email' => 'lutfi@mail.com', 'gender' => "L", 'weight' => 45.2, 'height' => 171, 'bmi' => 15.4, 'status' => 'Kekurangan Berat Badan'];

$formInput = ['date' => date('Y-m-d'), 'name' => $dataPasien->name, 'pob' => $dataPasien->pob, 'dob' => $dataPasien->dob, 'email' => $dataPasien->email, 'gender' => $dataPasien->gender, 'weight' => $weightFormat, 'height' => $dataBMI->height, 'bmi' => $dataBMI->bmi, 'status' => $dataBMI->status];

$datas = [$pasien1, $pasien2, $pasien3, $formInput];

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
                <h3 class="card-title">Hasil Menghitung BMI</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Periksa</th>
                            <th>Kode Pasien</th>
                            <th>Nama Pasien</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Berat (kg)</th>
                            <th>Tinggi (cm)</th>
                            <th>Nilai BMI</th>
                            <th>Status BMI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $nomor = 1;
                            $nomorPasien = 1;
                            foreach ($datas as $data) {
                                echo '<tr>';
                                echo '<td>' . $nomor++ . '</td>';
                                echo '<td>' . $data['date'] . '</td>';
                                echo '<td>' . 'P00' . $nomorPasien++ . '</td>';
                                echo '<td>' . $data['name'] . '</td>';
                                echo '<td>' . $data['pob'] . '</td>';
                                echo '<td>' . $data['dob'] . '</td>';
                                echo '<td>' . $data['email'] . '</td>';
                                echo '<td>' . $data['gender'] . '</td>';
                                echo '<td>' . $data['weight'] . '</td>';
                                echo '<td>' . $data['height'] . '</td>';
                                echo '<td>' . $data['bmi'] . '</td>';
                                echo '<td>' . $data['status']  . '</td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<?php

include('layout/footer.php');

?>