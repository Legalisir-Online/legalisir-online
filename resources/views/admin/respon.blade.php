@include('admin.includes.header')
@include('admin.includes.topbar')
@include('admin.includes.sidebar')

<head>
    <style>
        .box {
            background: #D9D9D9;
            border-radius: 10px;
        }

        .rectangle-list {
            max-height: 150px;
            /* Ketinggian maksimum daftar */
            overflow-y: scroll;
            /* Membuat daftar memiliki bilah gulir di sebelah kanan */
            padding: 10px;
        }

        .rectangle-item {
            background-color: #FFFFFF;
            border: 1px solid #CCCCCC;
            border-radius: 5px;
            padding: 6.4px;
            margin: 0;
        }

        .box {
            background: #D9D9D9;
            border-radius: 10px;
        }

        .progress-table {
            width: 100%;
            margin-top: 10px;
        }

        .progress {
            background-color: #E0E0E0;
            height: 20px;
            border-radius: 5px;
            overflow: hidden;
        }

        .progress-inner {
            height: 100%;
            background-color: #8B7B95;
            transition: width 0.3s ease-in-out;
        }

        td {
            padding: 10px;
            text-align: left;
        }

        th {
            font-weight: bold;
        }
    </style>

</head>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12">
                    <h1>
                        Respon
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li>Kuesioner</li>
                        <li class="active">Respon</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xs-12">
                    <div class="box" style="background: #D9D9D9; border-radius: 10px;">
                        <div class="row" style="width: 92%; margin:auto;">
                            <br>
                            <table>
                                <tr>
                                    <td style="padding-right: 25px;"><b>Kuesioner</b></td>
                                    <td>: [Nama Kuesioner]</td>
                                </tr>
                                <tr>
                                    <td style="padding-right: 25px;"><b>Periode</td>
                                    <td>: [Periode]</td>
                                </tr>
                                <tr>
                                    <td style="padding-right: 25px;"><b>Status</td>
                                    <td>: Aktif / Tidak Aktif</td>
                                </tr>
                                <tr>
                                    <td style="padding-right: 25px;"><b>Hasil Respon</td>
                                    <td>: 15 Responden</td>
                                </tr>
                            </table><br>
                        </div>
                    </div>
                    <div class="box" style="background: #D9D9D9; border-radius: 10px;">
                        <div class="row" style="width: 92%; margin:auto;">
                            <br>
                            <span><b>Nama</b></span>
                            <p>15 Responden</p>
                            <div class="rectangle-list">
                                <div class="rectangle-item">Item 1</div>
                                <div class="rectangle-item">Item 2</div>
                                <div class="rectangle-item">Item 3</div>
                                <div class="rectangle-item">Item 4</div>
                                <div class="rectangle-item">Item 5</div>
                                <div class="rectangle-item">Item 6</div>
                                <!-- Tambahkan daftar nama sesuai kebutuhan -->
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="box" style="background: #D9D9D9; border-radius: 10px;">
                        <div class="row" style="width: 92%; margin:auto;">
                            <br>
                            <span><b>NIM</b></span>
                            <p>15 Responden</p>
                            <div class="rectangle-list">
                                <div class="rectangle-item">M0520000</div>
                                <div class="rectangle-item">M0520000</div>
                                <div class="rectangle-item">M0520000</div>
                                <div class="rectangle-item">M0520000</div>
                                <div class="rectangle-item">M0520000</div>
                                <div class="rectangle-item">M0520000</div>
                                <div class="rectangle-item">M0520000</div>
                                <div class="rectangle-item">M0520000</div>
                                <!-- Tambahkan daftar nama sesuai kebutuhan -->
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="box" style="background: #D9D9D9; border-radius: 10px;">
                        <div class="row" style="width: 92%; margin:auto;">
                            <br>
                            <span><b>Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh Fakultas
                                    Teknologi Informasi dan Sains Data sudah memuaskan?</b></span>
                            <p>15 Responden</p>
                            <tr>
                                <th>Sangat Tidak Setuju</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-inner" style="width: 10%;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Tidak Setuju</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-inner" style="width: 30%;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Netral</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-inner" style="width: 50%;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Setuju</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-inner" style="width: 70%;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Sangat Setuju</th>
                                <td>
                                    <div class="progress">
                                        <div class="progress-inner" style="width: 90%;"></div>
                                    </div>
                                </td>
                            </tr>
                            </table>
                            <br>
                        </div>
                    </div>
                    <div class="box" style="background: #D9D9D9; border-radius: 10px;">
                        <div class="row" style="width: 92%; margin:auto;">
                            <br>
                            <span><b>Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh Fakultas
                                    Teknologi Informasi dan Sains Data sudah memuaskan?</b></span>
                            <p>15 Responden</p>
                            <div class="rectangle-list">
                                <div class="rectangle-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque euismod, mi id pretium lacinia, magna tellus egestas arcu, vitae bibendum
                                    orci leo quis nibh.</div>
                                <div class="rectangle-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque euismod, mi id pretium lacinia, magna tellus egestas arcu, vitae bibendum
                                    orci leo quis nibh.</div>
                                <div class="rectangle-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque euismod, mi id pretium lacinia, magna tellus egestas arcu, vitae bibendum
                                    orci leo quis nibh.</div>
                                <div class="rectangle-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque euismod, mi id pretium lacinia, magna tellus egestas arcu, vitae bibendum
                                    orci leo quis nibh.</div>
                                <div class="rectangle-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque euismod, mi id pretium lacinia, magna tellus egestas arcu, vitae bibendum
                                    orci leo quis nibh.</div>
                                <div class="rectangle-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque euismod, mi id pretium lacinia, magna tellus egestas arcu, vitae bibendum
                                    orci leo quis nibh.</div>
                                <div class="rectangle-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Quisque euismod, mi id pretium lacinia, magna tellus egestas arcu, vitae bibendum
                                    orci leo quis nibh.</div>
                                <!-- Tambahkan daftar nama sesuai kebutuhan -->
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.includes.footer')
