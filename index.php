<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Kids Toys</title>
  <link rel="stylesheet" href="styles/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar d-flex justify-content-around">
    <a href="/">
      <img src="images\brand.png" alt="" width="170" height="53" class="d-inline-block align-text-top">
    </a>
    <a href="/" class="nav-link">Главная</a>
    <a href="index.php?page=catalog" class="nav-link">Каталог</a>
  </nav>

  <?php
    $goods = [
      [
        'id' => 1,
        'name' => 'Игрушка мягкая Корги',
        'short_descr' => 'Мягкая игрушка СмолТойс «Корги Сплюша» очень мягкая, а внешне очень милая и симпатичная, поэтому играть с ней и обнимать ее - одно удовольствие.',
        'full_descr' => 'Мягкая игрушка СмолТойс «Корги Сплюша» - замечательная мягконабивная игрушка
        для Вашего ребенка. Она очень мягкая, а внешне очень милая и симпатичная, поэтому играть с ней и обнимать ее - одно
        удовольствие. Также ребенок научится брать на себя ответственность, ведь для него эта игрушка может стать
        настоящим питомцем и другом. <br><br>Игрушка очень мягкая и приятная на ощупь, ее можно использовать в качестве подушки.
        Изготовлена из качественных и безопасных материалов: искусственного меха, полотна трикотажного,
        текстильных материалов с элементами из пластмассы с набивкой из полиэфирного волокна, предназначена для игровых целей.
        Способствует развитию тактильных ощущений и воображения.',
        'images' => ['/images/goods/10.webp', '/images/goods/11.webp', '/images/goods/12.webp'],
        'size' => '17см х 25см х 50см',
        'price' => '1 200'
      ],
      [
        'id' => 2,
        'name' => 'Игрушка мягкая Цыпленок',
        'short_descr' => 'Мягкая игрушка Aurora выполнена в виде забавного милашки-цыпленка. Он станет верным другом ребенку 
        и отличным пополнением коллекции.',
        'full_descr' => 'Мягкая игрушка Aurora выполнена в виде забавного милашки-цыпленка. Он станет верным другом ребенку 
        и отличным пополнением коллекции.
        <br><br>Игрушка покрыта густым искусственным мехом.
        <br>Мягкая и нежная на ощупь.
        <br>Положительно влияет на эмоциональное развитие и фантазию ребенка.',
        'images' => ['/images/goods/20.webp', '/images/goods/21.webp', '/images/goods/22.webp', '/images/goods/23.webp'],
        'size' => '13см x 10см x 9см',
        'price' => '599'
      ],
      [
        'id' => 3,
        'name' => 'Игрушка мягкая Ленивец',
        'short_descr' => 'Мягкий ленивец Aurora – забавная игрушка, похожая на мультяшку. Она станет отличным другом и любимым участником игр.',
        'full_descr' => 'Мягкий ленивец Aurora – забавная игрушка, похожая на мультяшку. Она станет отличным другом и любимым участником игр.
        <br><br>Игрушка покрыта длинным нежным ворсом.
        <br>Мягкая на ощупь, приятно обнимать.
        <br>Подходит для игр, или в качестве детали интерьера.
        <br>Положительно влияет на эмоциональное развитие и фантазию ребенка.',
        'images' => ['/images/goods/30.webp', '/images/goods/31.webp', '/images/goods/32.webp'],
        'size' => '16см x 20см x 9см',
        'price' => '600'
      ], 
      [
        'id' => 4,
        'name' => 'Игрушка мягкая Пингвин',
        'short_descr' => 'Пингвин Aurora – очаровательный и забавный! Он выглядит невероятно мило в своей шляпке-маффине, и обязательно станет отличным другом ребенку.',
        'full_descr' => 'Пингвин Aurora – очаровательный и забавный! Он выглядит невероятно мило в своей шляпке-маффине, и обязательно станет отличным другом ребенку.
        <br><br>Милая игрушка станет не только участницей игр, но и отличной деталью интерьера.
        <br>Покрыта густым искусственным мехом.
        <br>Положительно влияет на эмоциональное развитие и фантазию ребенка.',
        'images' => ['/images/goods/40.webp', '/images/goods/41.webp', '/images/goods/42.webp'],
        'size' => '24см x 14см x 15см',
        'price' => '699'
      ], 
      [
        'id' => 5,
        'name' => 'Игрушка мягкая Кролик',
        'short_descr' => 'Мягкий кролик Aurora – просто прелесть! В его симпатичную мордашку влюбляешься с первого взгляда, а шерстку приятно гладить.',
        'full_descr' => 'Мягкий кролик Aurora – просто прелесть! В его симпатичную мордашку влюбляешься с первого взгляда, а шерстку приятно гладить.
        <br><br>Игрушка покрыта густым и нежным искусственным мехом.
        <br>Сделана в положении сидя.
        <br>Положительно влияет на эмоциональное развитие и фантазию ребенка.',
        'images' => ['/images/goods/50.webp', '/images/goods/51.webp', '/images/goods/52.webp'],
        'size' => '22см x 15см x 15см',
        'price' => '999'
      ], 
      [
        'id' => 6,
        'name' => 'Игрушка мягкая Утка',
        'short_descr' => 'Мягкая игрушка Aurora выполнена в виде забавной милашки-уточки. Она станет верным другом ребенку и отличным пополнением коллекции.',
        'full_descr' => 'Мягкая игрушка Aurora выполнена в виде забавной милашки-уточки. Она станет верным другом ребенку и отличным пополнением коллекции.
        <br><br>Игрушка покрыта густым искусственным мехом.
        <br>Мягкая и нежная на ощупь.
        <br>Положительно влияет на эмоциональное развитие и фантазию ребенка.',
        'images' => ['/images/goods/60.webp', '/images/goods/61.webp', '/images/goods/62.webp'],
        'size' => '20см x 14см x 15см',
        'price' => '799'
      ],  
    ];

    $page = $_GET['page'];
    
    if (!isset($page)) 
    {
      require('templates/main.php');
    } 
    elseif ($page == 'catalog') 
    {
      require('templates/catalog.php');
    } 
    elseif($page == 'product') 
    {
      $id = $_GET['id'];
      $product = [];

      foreach ($goods as $good) {
        if ($good['id'] == $id) {
          $product = $good;
          break;
        }
      }
      
      require('templates/product.php');
    }
  ?>

  <footer class="footer">
    <div class="text-center">
      ©
      <script type="text/javascript">document.write(new Date().getFullYear());</script> KidsToys
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>