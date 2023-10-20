<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tugas WAD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <style>
    .container {
      display: flex;
      height: 550px;
      justify-content: center;
      align-items: center;
    }

    #button{
      margin-top: 35px;
    }
    
    

    
  </style>
</head>

<body>
  <div class="container">
    <div class="card" style="width: 270px;">
        <h1 style="text-align: center; margin-bottom: 20px;">Tugas WAD</h1>
        <label>Input angka</label>
        <input type="number">
        <label>Input Operasi</label>
        <select>
          <option>+</option>
          <option>-</option>
          <option>*</option>
          <option>/</option>
        </select>
        <a href="#" id="button" class="btn btn-success">Hitung</a>
      </div>
    </div>
  </div>
</body>

</html>