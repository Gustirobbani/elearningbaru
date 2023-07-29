<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hafalan Santri - Video Hafalan</title>
  <style>
    /* General Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-image: url("<?php echo base_url('assets/img/ani.jpg'); ?>");
      background-size: cover;
      background-position: center;
    }

    h1 {
      text-align: center;
    }

    h2 {
      margin-top: 0;
    }

    p {
      margin: 0;
    }

    .text-center {
      text-align: center;
    }

    video {
      width: 70%;
      margin-bottom: 50px;
    }

    hr {
      border: none;
      border-top: 40px solid #ccc;
      margin: 10px 0;
    }

    textarea {
      width: 100%;
      height: 100px;
      resize: vertical;
    }

    button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }

    form {
      margin-top: 10px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    select {
      width: 10%;
      padding: 6px 10px;
      font-size: 14px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    option {
      padding: 5px;
    }

    .submit {
      margin-bottom: 20px;
      padding: 10px;
      border: 20px solid #ccc;
      border-radius: 30px;
    }

    .submit {
      margin-bottom: 5px;
    }

    .submit {
      font-size: 12px;
      color: #777;
    }

		form {
  display: flex;
  flex-direction: column;
  align-items: left;
  margin-top: 20px;
}

textarea {
  width: 800px;
  height: 80px;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button[type="submit"] {
  width: 150px;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #45a049;
}

    .bold-text {
      font-weight: bold;
      /* Tambahkan properti CSS lainnya sesuai kebutuhan */
    }
  </style>
</head>
<body>
  <h1>Hafalan Santri - Video Hafalan</h1>
  <?php if (!empty($video)): ?>
    <div>
      <h2>Nama : <?php echo $video[0]['nama']; ?></h2>
      <h2>Hafalan: <?php echo $video[0]['nama_hafalan']; ?></h2>
			<p><strong>Tanggal Upload: <?php echo date('Y-m-d', strtotime($video[0]['created_at'])); ?></strong></p>
      <video src="<?php echo base_url('assets/video/A/'.$video[0]['file_name']); ?>" controls></video>
    </div>
<!-- Kolom komentar -->

<h2>Tambah Komentar</h2>
<?php echo validation_errors(); ?>
<?php if ($this->session->flashdata('success')): ?>
    <div class="success-message">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('error')): ?>
    <div class="error-message">
        <?php echo $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>
<form method="post" action="<?php echo base_url('guru/tambahKomentar/'.$id_siswa); ?>">
    <textarea name="komen" placeholder="Komentar"></textarea>
    <button type="submit">Kirim Komentar</button>
</form>
<?php else: ?>
    <p>Video hafalan tidak ditemukan.</p>
  <?php endif; ?>
</body>








