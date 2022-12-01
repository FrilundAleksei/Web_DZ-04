<?php
$name = 'Фрилунд Алексей';
$prof = 'Оператор дрона/фотограф';
$country = 'Российская Федерация';
$city = 'Петрозаводск';
$email = 'email@email.com';
$tel = '88888888888';
$age = '47 лет';



$skills = [
  ['name' => 'Adobe Premiere Pro', 'percent' => 70],
  ['name' => 'Adobe Photoshop', 'percent' => 80],
  ['name' => 'Photo', 'percent' => 70],
  ['name' => 'Dron', 'percent' => 100],
];

$workExperience = [
  [
    'Должность' => 'Фрилансер',
    'Начало' => 'Март 2021',
    'Конец' => 'по сегодняшний день',
    'Описание' => 'Фото/видео съемка с дрона.'
  ],
  [
    'Должность' => 'Директор по перосналу',
    'Начало' => 'Июнь 1998',
    'Конец' => 'Февраль 2021',
    'Описание' => 'Руководство формированием штата, необходимого для достижения экономических и производственных целей предприятия.'
  ],
  [
    'Должность' => 'Студент',
    'Начало' => 'июль 1997',
    'Конец' => 'сентябрь 1992',
    'Описание' => 'Грыз гранит науки.'
  ],
];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html, body, h1, h2, h3, h4, h5, h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://sun9-east.userapi.com/sun9-22/s/v1/ig2/leDJNtH8Pjryf1pGVMRvLd47fAsKbdrhzxNhaLLf1fa3hamVhrZgiLaX234Hik2XefyyhDNxYQ57B_XVC_nIVsEC.jpg?size=1280x960&quality=96&type=album"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-white">
              <h2>
                <?php echo $name; ?>
              </h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $prof; ?>
            </p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $country . ' ' . $city; ?>
            </p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $email; ?>
            </p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $tel; ?>
            </p>
           <p><i class="fa fa-heart fa-fw w3-margin-right w3-large w3-text-teal"></i>
              <?php echo $age; ?>
            </p>
           
           <hr>
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php
              for ($i = 0; $i < count($skills); $i++):
                $name = $skills[$i]['name'];
                $percent = $skills[$i]['percent'];
            ?>
            <p>
              <?= $name; ?>
            </p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $percent; ?>%">
                <?php echo $percent; ?>%
              </div>
            </div>
            <?php endfor; ?>
            <br>
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Русский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:60%"></div>
            </div>
            <p>Финский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>
          </div>
        </div><br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16">
            <i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>
            Опыт работы
          </h2>
            <?php
            for ($i = 0; $i < count($workExperience); $i++):
              $title = $workExperience[$i]['Должность'];
              $start = $workExperience[$i]['Начало'];
              $finish = $workExperience[$i]['Конец'];
              $description = $workExperience[$i]['Описание'];
              ?>
              <div class="w3-container">
                <h5 class="w3-opacity"><b>
                  <?php echo $title; ?></b>
                </h5>
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
                  <?php echo $start; ?> - 
                  <?php if ($finish == 'Current'):?>
                    <span class="w3-tag w3-teal w3-round">
                      <?php echo $finish; ?>
                    </span>
                  <?php else: 
                    echo $finish;
                  endif; ?>
                </h6>
                <p>
                  <?php echo $description; ?>
                </p>
                <hr>
              </div>
            <?php endfor; ?>
        </div>
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>gb.ru</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Аналитик больших данных. Цифровые профессии</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Петрозаводского государственного университета (ПетрГУ)</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>1992 - 1997</h6>
            <p>Инженер строитель</p>
           
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>