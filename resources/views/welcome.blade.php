<!DOCTYPE html>
<html>
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inovasi Adhi Karya</title>
</head>
<body>
    <div style="margin-top: 30px;">
        <div class="container" style="background-color: #ffeaa7; padding: 20px; border-radius: 20px;">
            <h2>A. PENENTUAN SUDUT JACKING</h2>
            <form action="/count" method="POST">
                {{ csrf_field() }}  
                <div class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-3">
                        <p>Lokasi 1</p>
                    </div>

                    <div class="col-md-3">
                        <input type="text" name="lokasi1" class="form-control" placeholder="Masukkan Lokasi Pertama" required>
                    </div>

                    <div class="col-md-3"></div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-3">
                        <p>Lokasi 2</p>
                    </div>

                    <div class="col-md-3">
                        <input type="text" name="lokasi2" class="form-control" placeholder="Masukkan Lokasi Kedua" required>
                    </div>

                    <div class="col-md-3"></div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-3">
                        <p>Elevasi 1</p>
                    </div>

                    <div class="col-md-3">
                        <input type="number" step="any" name="elevasi1" class="form-control" placeholder="Masukkan Elevasi Pertama" required>
                    </div>

                    <div class="col-md-3"></div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-3">
                        <p>Elevasi 2</p>
                    </div>

                    <div class="col-md-3">
                        <input type="number" step="any" name="elevasi2" class="form-control" placeholder="Masukkan Elevasi Kedua" required>
                    </div>

                    <div class="col-md-3"></div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-3">
                        <p>Jarak</p>
                    </div>

                    <div class="col-md-3">
                        <input type="number" step="any" name="jarak" class="form-control" placeholder="Masukkan Jarak" required>
                    </div>

                    <div class="col-md-3"></div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-submit" style="background-color: #fdcb6e;">Count</button>
                    </div>
                    <div class="col-md-3"></div><br>
                </div>    
            </form>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    @if(session('info'))
                    <div class="alert alert-info">
                        {{session('info')}}
                    </div>
                    @endif
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>

    <!--div style="margin-top: 30px;">
        <div class="container" style="background-color: #fab1a0; padding: 20px; border-radius: 20px;">
            <h2>B. BEDA TINGGI DENGAN SUDUT</h2>
            <form action="/count2" method="POST">
                {{ csrf_field() }}  
                <div class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-3">
                        <p>D°</p>
                    </div>

                    <div class="col-md-3">
                        <input type="number" step="any" name="derajat" class="form-control" placeholder="Masukkan Nilai Derajat" required>
                    </div>

                    <div class="col-md-3"></div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-3">
                        <p>M'</p>
                    </div>

                    <div class="col-md-3">
                        <input type="number" step="any" name="meter" class="form-control" placeholder="Masukkan Nilai Meter" required>
                    </div>

                    <div class="col-md-3"></div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-3">
                        <p>S"</p>
                    </div>

                    <div class="col-md-3">
                        <input type="number" step="any" name="second" class="form-control" placeholder="Masukkan Nilai Waktu" required>
                    </div>

                    <div class="col-md-3"></div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-3">
                        <p>Pipa</p>
                    </div>

                    <div class="col-md-3">
                        <input type="number" step="any" name="pipa" class="form-control" placeholder="Masukkan Jumlah Pipa" required>
                    </div>

                    <div class="col-md-3"></div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-3">
                        <p>Penurunan Alat T0</p>
                    </div>

                    <div class="col-md-3">
                        <input type="number" step="any" name="alat" class="form-control" placeholder="Masukkan Nilai" required>
                    </div>

                    <div class="col-md-3"></div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-3">
                        <p>Jarak Center Monitor</p>
                    </div>

                    <div class="col-md-3">
                        <input type="number" step="any" name="jarakmonitor" class="form-control" placeholder="Masukkan Nilai" required>
                    </div>

                    <div class="col-md-3"></div>
                </div>            

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-submit" style="background-color: #ff7675;">Count</button>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </form>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    @if(session('info'))
                    <div class="alert alert-info">
                        {{session('info')}}
                    </div>
                    @endif
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div-->

    <!--div style="margin-top: 30px;">
        <div class="container" style="background-color: #81ecec; padding: 20px; border-radius: 20px;">
            <h2>C. MONITORING</h2>
            <form action="/count3" method="POST">
                {{ csrf_field() }}  
                <div class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-3">
                        <p>Penurunan Alat T0</p>
                    </div>

                    <div class="col-md-3">
                        <input type="text" step="any" name="alat" class="form-control" placeholder="Masukkan Nilai" required>
                    </div>

                    <div class="col-md-3"></div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-3">
                        <p>Jarak Center Monitor</p>
                    </div>

                    <div class="col-md-3">
                        <input type="number" step="any" name="jarakmonitor" class="form-control" placeholder="Masukkan Nilai" required>
                    </div>

                    <div class="col-md-3"></div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-submit" style="background-color: #00cec9;">Count</button>
                    </div>
                    <div class="col-md-3"></div>
                </div>    
            </form>
        </div>
    </div-->

</body>
</html>