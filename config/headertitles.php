<?php 

class Headertitle{

public $title;
public $url;
public $active;

public function __construct($_title, $_url, $_active) {
    $this->title = $_title;
    $this->image = $_url;
    $this->type = $_active;
}
}

return [
new Headertitle("Characters", "#", "false"),
new Headertitle("Comics", "#", "true"),
new Headertitle("Movies", "#", "false"),
new Headertitle("Tv", "#", "false"),
new Headertitle("Games", "#", "false"),
new Headertitle("Collectibles", "#", "false"),
new Headertitle("Videos", "#", "false"),
new Headertitle("Fans", "#", "false"),
new Headertitle("News", "#", "false"),
new Headertitle("Shop", "#", "false"),

];