<!DOCTYPE html>
<html lang="id-ID">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <title><?php echo $title; ?></title>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no'/>
  <meta name="robots" content="index, follow">
  <meta name="description" content="Sekolah Tinggi Ilmu Ekonomi (STIE) Dharma Andalas resmi menjadi Universitas dengan nama Universitas Dharma Andalas atau Unidha. Keputusan tersebut diresmikan dengan surat keputusan Menteri Pendidikan dan Kebudayaan RI yang diterima pihak yayasan pada tanggal 3 September 2014 lalu. Ketua Yayasan Pendidikan STIE Dharma Andalas Prof Satni Eka Putra mengatakan bahwa telah mengupayakan proses naik kelas Dharma Andalas menjadi universitas.">
  <meta name="keywords" content="unidha, universitas, dharma, andalas, padang, terbaik, indonesia, sumbar">
  <meta name="author" content="Frelance">
  <meta http-equiv="imagetoolbar" content="no">
  <meta name="language" content="Indonesia">
  <meta name="revisit-after" content="7">
  <meta name="webcrawlers" content="all">
  <meta name="rating" content="general">
  <meta name="spiders" content="all">
  
  <link rel="shortcut icon" href="<?php echo base_url()?>asset/images/favicon.png" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="rss.xml" />
  <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/functions.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/agenda.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/lowongan.css">
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=524488270912102";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
</head>

<body class="home blog">
    <?php include "menu-atas.php"; ?>
    <div style="clear:both"></div>
      <div style='margin-bottom:-20px;' id="head" class="wrap">  
          <a href="index.php"><img src="<?php echo base_url(); ?>asset/logo/logo.png" id="logo"></a>
      </div>
    <div style="clear:both"></div>

    <?php echo $contents; ?>
    <?php $this->model_main->kunjungan(); ?>
</body>
</html>