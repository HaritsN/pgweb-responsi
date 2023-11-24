<?php
// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sleman";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM penduduk";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jumlah Penduduk</title>
    <!-- Tab browser icon -->
  <link rel="icon" type="image/x-icon" href="" />

<!-- <link rel="stylesheet" href="style.css" /> -->
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- apexcharts -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.css"
      integrity="sha512-nnNXPeQKvNOEUd+TrFbofWwHT0ezcZiFU5E/Lv2+JlZCQwQ/ACM33FxPoQ6ZEFNnERrTho8lF0MCEH9DBZ/wWw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Optional custom styles */
        /* Adjust as needed */
        .table-container {
            margin: 20px;
        }
        body {
            background-size: cover;
            color: #000;
        }

        .navbar {
            background-color: #0095ff;
        }

        .table-container {
            margin: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang tabel */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Efek bayangan pada tabel */
        }

        .table th,
        .table td {
            color: #000; /* Warna teks hitam */
            margin-right: 20px;
        }

        .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
            width: auto;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
}
    </style>
</head>

<body>
  <!-- Navbar -->
  <nav
      class="navbar navbar-expand-lg navbar-light shadow-sm"
      style="background-color: #ffc800"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"
          ><i class="fa-solid fa-earth-asia"></i> Infografis Kabupaten Sleman</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <!--Akhir Navbar-->

  <!-- Jumlah Sekolah -->
  <div class="container mt-4">
      <div class="card">
        <div class="card-header">
          <h4>Jumlah Penduduk</h4>
        </div>
        <div class="card-body">
          <div id="chart"></div>
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="card">
        <div class="card-header">
          <h4>Tabel Jumlah Penduduk</h4>
        </div>
        <div class="card-body">
        <div class="container table-container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kecamatan</th>
                    <th>Jumlah Penduduk</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["no"] . "</td>
                            <td>" . $row["kecamatan"] . "</td>
                            <td>" . $row["jumlah_penduduk"] . "</td>
                          </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>0 results</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
        </div>
      </div>
    </div>
        
    

     <!-- apexcharts JS -->
     <script
      src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.js"
      integrity="sha512-HctQcT5hnI/elQck4950pvd50RuDnjCSGSoHI8CNyQIYVxsUoyJ+gSQIOrll4oM/Z7Kfi7WCLMIbJbiwYHFCpA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <script>
      var options = {
        series: [
          {
            name: "Jumlah Penduduk",
            data: [
              33514,
32110,
51231,
72255,
103192,
100524,
131005,
59004,
53113,
86163,
67555,
105612,
71888,
53628,
36559,
37320,
31131,

            ],
          },
        ],
        chart: {
          type: "bar",
          height: 350,
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: "55%",
            endingShape: "rounded",
            dataLabels: {
              position: "top",
            },
          },
        },
        dataLabels: {
          enabled: false,
        },
        stroke: {
          show: true,
          width: 2,
          colors: ["transparent"],
        },
        xaxis: {
          categories: [
            "Moyudan",
            "Minggir",
            "Seyegan",
            "Godean",
            "Gamping",
            "Mlati",
            "Depok",
            "Berbah",
            "Prambanan",
            "Kalasan",
            "Ngemplak",
            "Ngaglik",
            "Sleman",
            "Tempel",
            "Turi",
            "Pakem",
            "Cangkringan",

          ],
          title: {
            text: "Kecamatan di Kabupaten Sleman",
          },
        },
        yaxis: {
          title: {
            text: "Jumlah Penduduk, 2020  ",
          },
        },
        fill: {
          opacity: 1,
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val + " Jiwa";
            },
          },
        },
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val;
          },
          offsetY: -20,
          style: {
            fontSize: "12px",
            colors: ["#304758"],
          },
        },
      };

      var chart = new ApexCharts(document.querySelector("#chart"), options);
      chart.render();
    </script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   
</body>

</html>

<?php
$conn->close();
?>