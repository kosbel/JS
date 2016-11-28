<?php

class GameClass
{
    private $x = '300';
    private $y = '300';

    public $speed = '10';

    private $w = '20';
    private $h = '20';
    protected $color = 'darkgreen';


    private $dbh;

    public function init($dbh)
    {
        $this->dbh = $dbh;
        $sql = 'SElECT * FROM obj';
        $obj_memory = $dbh->query($sql);
        foreach ($obj_memory as $row) {
            if ($row['var'] == 'x') $this->x = $row['value'];
            if ($row['var'] == 'y') $this->y = $row['value'];
        }
    }

    public function set_x($x)
    {
        $this->x = $x;
    }

    public function set_y($y)
    {
        $this->y = $y;
    }

    public function get_x()
    {
        return $this->x;
    }

    public function get_y()
    {
        return $this->y;
    }

    public function get_speed()
    {
        return $this->speed;
    }

    public function log()
    {
        echo "x = " . $this->x . " y = " . $this->y . "<br>";
    }

    function save()
    {
        $this->dbh->query(" UPDATE `obj` SET `value` = " . intval($this->x) . "
                            WHERE `obj`.`var` = 'x' ");
        $this->dbh->query(" UPDATE `obj` SET `value` = " . intval($this->y) . "
                            WHERE `obj`.`var` = 'y' ");
    }

    public function render()
    {
        ?>
        <div
            style="left: <?= $this->x ?>px; top: <?= $this->y ?>px; position: absolute; width: <?= $this->w ?>px; height: <?= $this->h ?>px; background: <?= $this->color ?>; border: 1px solid silver;">

        </div>
        <?php
    }
}
