<?php
    namespace Drupal\new_module\Controller;
    use Drupal\Core\Controller\ControllerBase;

    class NewModuleController extends ControllerBase {
        public function content(){
            $quien = \Drupal::request()->query->get('quien');

            return [
                '#theme'=> 'new_module',
                //'#items' => $items,
                '#title' => 'listado de textos'
            ];
            
        }

    }
?>