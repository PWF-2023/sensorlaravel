<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Monitoring Sensor Laravel</title>

    <!-- panggil file jquery untuk proses realtime -->
    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>

    <!-- ajax untuk realtime -->
    <script type="text/javascript">
      $(document).ready( function() {
        setInterval( function() {
          $("#suhu").load("{{ url('bacasuhu') }}");
          $("#kelembaban").load("{{ url('bacakelembaban') }}");
        }, 1000);     //1000ms = 1s
      });
    </script>

  </head>
  <body>

    <!-- tampilan website header-->
    <div class="container" style="text-align: center; margin-top: 80px;">
      <img src="{{ ('images/LaravelLogo.png') }}" style="width: 150px">
      <h2>Monitoring Nilai Sensor Secara Realtime <br> Menggunakan Framework Laravel</h2>
      {{-- <p>- STEP BY STEP -</p> --}}
    </div>

    <!-- tampilan nilai sensor -->
    <div class="container">
      <div class="row" style="text-align: center;">
        <div class="col-md-6">
          <div class="card">

            <div class="card-header" style="text-align: center; background-color: red; color: white;">
              <h4>SUHU</h4>
            </div>
            <div class="card-body">
              <div style="font-size: 70px; font-weight: bold;">
                <span id="suhu">0</span> <span style="font-size: 24px; vertical-align: top;">°C</span>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-6">
          <div class="card">

            <div class="card-header" style="text-align: center; background-color: red; color: white;">
              <h4>KELEMBABAN</h4>
            </div>
            <div class="card-body">
              <div style="font-size: 70px; font-weight: bold;">
                <span id="kelembaban">0</span> <span style="font-size: 24px; vertical-align: top;">%</span>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- tampilan logo koding perangkat -->
    {{-- <div class="container" style="text-align: center; margin-top: 20px">
      <img src="{{ ('images/SocialMedia.png') }}">
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
