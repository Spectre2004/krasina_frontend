<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/user-control-teh.css">
  <link rel="stylesheet" href="../css/header.css">
</head>

<body>
  <? require "../elements/header.php" ?>
  <div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
 
    <div class="d-flex content">
 
         <div class="collaps_name">
               <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href="users.php">Студенты</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="calendar.php">Календарь</a></li>
    <li class="breadcrumb-item active" aria-current="page">Оценка</li>
  </ol>
</nav>
            <div class="row">
                <h1 class="fio">Иван Иванов Иванович</h1>
               
            </div>
            <div class="d-flex flex-row">
                <p id="grupp">Группа:</p>
                <p id="p-export">1и-11-22;</p>
            </div>
            <div class="d-flex flex-row">
                <p id="grupp">Организация:</p>
                <p id="p-export">ЧВК-САС;</p>
            </div>
            <div class="d-flex flex-row">
                <p id="grupp">От организации:</p>
                <p id="p-export">Генадьев;</p>
            </div>
            <div class="d-flex flex-row">
                <p id="grupp">От техникума:</p>
                <p id="p-export">Олежа;</p>
            </div>
            <div class="d-flex flex-row">
                <p id="grupp">Начало практики:</p>
                <p id="p-export">01:02:21;</p>
            </div>
            <div class="d-flex flex-row">
                <p id="grupp">Окончание практики:</p>
                <p id="p-export">01:09:21;</p>
            </div>
           
            <a-table id="table-ld" ></a-table>
            <div class="d-flex flex-row" id="btn" style="border:none">
                <button type="button" class="btn btn-secondary">Замечание</button>
                <button type="button" class="btn btn-danger">Отправить</button>
            </div>
           

        </div> 

        <div class="collaps">
        <div class="row">
                <h1 class="fio-sm">Иван Иванов Иванович</h1>
               
            </div>
            <div class="d-flex flex-row" id="title-date">
                <div id="date-img"><img src="../img/Polygon 12.svg" alt=""></div>
                <h1 style="font-size:larger; margin:0 0 20px 0  ">20 мая 2023г.</h1>
            </div>
            <div class="d-flex flex-row" id="info">
                <p id="grupp">Тема:</p>
                <p id="p-export">Разработка локальной сети;</p>
            </div>
            <div class="d-flex flex-row" id="info">
                <p id="grupp">Задание:</p>
                <p id="p-export">Разработать сеть;</p>
            </div>
            <div class="d-flex flex-row" id="info">
                <p id="grupp">Компетенции освоены:</p>
                <p id="p-export">100%</p>
            </div>
            <div class="d-flex row" id="info">
                  <!-- textarea- форма ввода bootstrap -->
                <textarea class="form-control" aria-label="With textarea" placeholder="Заполнить/Дополнить"></textarea>
            </div>
            <div class="d-flex flex-row" id="info">
                <p id="grupp">приход/уход:</p>
                <p id="p-export">вовремя</p>
            </div>
            <div class="d-flex flex-row" id="info">
                <p id="grupp">план выполнен:</p>
                <p id="p-export">100%</p>
            </div>
          
            <div class="d-flex flex-row" id="info">
                <p id="grupp">оценка:</p>
                <p id="p-export">отлично</p>
            </div>
            <div class="d-flex row" id="info">
                  <!-- textarea- форма ввода bootstrap -->
                <textarea class="form-control" aria-label="With textarea" placeholder="Комментарий"></textarea>
            </div>
            <div class="d-flex flex-row" id="btn-sm" style="border:none">
             <!-- Я продублировал кнопки для того чтоб в мобилке поставить их по центру так меньше гемора -->
                <button type="button" class="btn btn-secondary">Замечание</button>
                <button type="button" class="btn btn-danger">Отправить</button>
            </div>
            
           
        </div>
    </div>

</div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">Программы</div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">Сообщения</div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
  <script src="https://kit.fontawesome.com/88f6b82310.js" crossorigin="anonymous"></script>
  <script src="../js/a-table.js"></script>
</body>

</html>