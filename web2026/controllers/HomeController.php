<?php 
namespace controllers {
    class HomeController {
        public function HomeView(object $f3) : void {
            echo \Template::instance()->render('home.html');
        }
    }
}
