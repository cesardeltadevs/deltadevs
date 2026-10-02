<?php 
namespace controllers {
    class HomeController {
        public function HomeView(object $f3) : void {
            echo \Template::instance()->render('inicio.html');
        }

        public function ServicesView(object $f3) : void {
            echo \Template::instance()->render('servicios.html');
        }
        public function AboutView(object $f3) : void {
            echo \Template::instance()->render('nosotros.html');
        }

        public function ContactView(object $f3) : void {
            echo \Template::instance()->render('contacto.html');
        }
        
        public function SendContactForm(object $f3) : void {
            // Aquí iría la lógica para procesar el formulario de contacto
        }
    }
}
