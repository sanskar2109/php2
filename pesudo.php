<?php
class gla
{
    public $data = 24;
    private $num = 38;

    private function task()
    {
        echo "hello";
    }

    public function display()
    {
        $this->task();
    }
}
$obj=new gla();
$new_obj=new ReflectionMethod('gla','task');//private method  access
$new_obj->setAccessible(true);
$new_obj->invoke(new gla);
//TO access private property
$new_obj=new ReflectionProperty('gla','num');
$new_obj->setAccessible(true);
echo $new_obj->getValue(new gla);
