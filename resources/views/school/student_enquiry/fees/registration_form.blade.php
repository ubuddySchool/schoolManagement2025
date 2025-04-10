<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manual Registration Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      background-color: #1b381b;
      padding: 30px;
      font-family: Arial, sans-serif;
    }

    .form-box {
      background-color: #fff;
      padding: 40px;
      max-width: 900px;
      margin: auto;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      border-top: 6px solid #28a745;
    }

    .form-title {
      text-align: center;
      font-weight: bold;
      margin-bottom: 30px;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: start;
    }

    .brand h4 {
      color: #28a745;
      margin: 0;
    }

    .photo-placeholder {
      width: 120px;
      height: 150px;
      border: 2px dashed #000;
    }

    .form-group {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
      gap: 15px;
    }

    .form-group label {
      width: 140px;
      font-weight: bold;
    }

    .line {
      border-bottom: 1px solid #000;
      flex-grow: 1;
      height: 18px;
    }

    .row {
      display: flex;
      gap: 20px;
      margin-bottom: 15px;
    }

    .col {
      flex: 1;
    }

    .radio-group {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    hr {
      margin: 40px 0;
      border: none;
      border-top: 1px solid #000;
    }

    .no-print {
      text-align: center;
      margin-top: 20px;
    }

    .no-print button {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }

    @media print {
      body {
        background-color: #fff;
        padding: 0;
      }
      .no-print {
        display: none;
      }
      .form-box {
        box-shadow: none;
        border: none;
      }
    }
  </style>
</head>
<body>

  <div class="form-box">
    <div class="header">
      <div class="brand">
        <h4>Brand Name</h4>
        <small>TAGLINE HERE</small>
      </div>
      <div class="photo-placeholder"></div>
    </div>

    <h3 class="form-title">REGISTRATION FORM</h3>

    <div class="form-group">
      <label>Serial No.</label>
      <input type="text" name="" value="00112" id="">
      <!-- <div class="line"></div> -->
    </div>

    <div class="row">
      <div class="col form-group">
        <label>Student Name</label>
        <input type="text" name="" value="Ram singh" id="">

        <!-- <div class="line"></div> -->
      </div>
      <div class="col form-group">
        <label>Father’s Name</label>
        <input type="text" name="" value="Phool singh" id="">

        <!-- <div class="line"></div> -->
      </div>
    </div>

    <div class="row">
      <div class="col form-group">
        <label>Date of Birth</label>
        <div class="line"></div>
      </div>
      <div class="col form-group">
        <label>Nationality</label>
        <div class="line"></div>
      </div>
    </div>

    <div class="form-group">
      <label>Address</label>
      <div class="line"></div>
    </div>

    <div class="row">
      <div class="col form-group">
        <label>Mobile</label>
        <div class="line"></div>
      </div>
      <div class="col form-group">
        <label>Landline</label>
        <div class="line"></div>
      </div>
      <div class="col form-group">
        <label>Email</label>
        <div class="line"></div>
      </div>
    </div>

    <div class="row">
      <div class="col form-group">
        <label>Gender</label>
        <div class="radio-group">
          <input type="radio" name="gender"> Male
          <input type="radio" name="gender"> Female
        </div>
      </div>
      <div class="col form-group">
        <label>Blood Group</label>
        <div class="line"></div>
      </div>
    </div>

    <div class="row">
      <div class="col form-group">
        <label>Parent</label>
        <div class="line"></div>
      </div>
      <div class="col form-group">
        <label>Principal</label>
        <div class="line"></div>
      </div>
    </div>

    <hr>

    <h4>For Office Use</h4>

    <div class="row">
      <div class="col form-group">
        <label>Name</label>
        <div class="line"></div>
      </div>
      <div class="col form-group">
        <label>Father’s Name</label>
        <div class="line"></div>
      </div>
    </div>

    <div class="row">
      <div class="col form-group">
        <label>Date of Birth</label>
        <div class="line"></div>
      </div>
      <div class="col form-group">
        <label>Date of Joining</label>
        <div class="line"></div>
      </div>
    </div>

    <div class="form-group">
      <label>Address</label>
      <div class="line"></div>
    </div>

    <div class="row">
      <div class="col form-group">
        <label>Mobile</label>
        <div class="line"></div>
      </div>
      <div class="col form-group">
        <label>Program/Class</label>
        <div class="line"></div>
      </div>
    </div>

    <div class="no-print">
      <button onclick="window.print()">Print This Form</button>
    </div>
  </div>

</body>
</html>
