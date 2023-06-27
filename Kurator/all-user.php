<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Техникум Красина</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/start-kur.css">
  <link rel="stylesheet" href="../css/header.css">
</head>

<body>
  <!-- Шапка сайта -->
  <? require "../elements/header.php" ?>

  <div class="tab-content" id="nav-tabContent">
    <!-- блок сообщений -->
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Организации</li>
        </ol>
      </nav>
      <div class="main">
     
        <b-table style="font-family: 'Helvetica';font-style: normal;font-weight: 300;"></b-table>
        <!-- рейтинг зайди в js там vue компнент -->
        <messages></messages>
      </div>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">Программы</div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">Сообщения</div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
  <script src="https://kit.fontawesome.com/88f6b82310.js" crossorigin="anonymous"></script>
  <script src="../js/b-table.js"></script>
  <script src="../js/messages.js"></script>


</body>

</html>