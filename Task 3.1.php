<?php 
/**<созаем класс item, который не наследуется>*/
final class item{

      /** <создаем публичный конструктор, в который передаем id элемента> */
    public function __construct($id)
  {
    $this -> id = $id;
  }
  /** <создаем защищенные свойства> */
  protected $id;
  protected $name;
  protected $status;
  protected $changed;

  /** <создаем защищенный метод init, который записывает значение в свойства элемента > */
  protected static function init() {
    $this -> name = $name;//записываем данные в свойства
    $this -> status = $status; 
  }
    /** <создаем публичный метод save > */
  public function save(){
    
  }
}
?>