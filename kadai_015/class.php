<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>kadai_015</title>>
  </head>

  <body>
    <p>
      <?php
      class Food {
        public $name;
        public $price;

        public function set_name(string $name) {
        $this->name=$name;
        } 
        public function show_name() {
        echo $this->name . '<br>';
      }

      public function set_price(int $price) {
        $this->price=$price;
        } 
        public function show_price() {
        echo $this->price . '<br>';
      }

    public function _construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
        
print_r($food)
    ?>

<?php
Class Animal {
    public $name;
    public $height;
    public $weight;

    public function set_height(int $height) {
    $this->height=$height;
    }
    public function show_height(){
    echo $this ->height . '<br>'
    }

  public function _construct(string $name, int $height, int $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
}
}
$user = new Animal('dog', 60, 5000);
print_r($animal);

?>


</p>
  </body>
</html>

