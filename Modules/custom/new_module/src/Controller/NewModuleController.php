<?php
    namespace Drupal\new_module\Controller;
    use Drupal\Core\Controller\ControllerBase;

    class NewModuleController extends ControllerBase {
        public function content(){
            $quien = \Drupal::request()->query->get('quien');
            

            
            if($quien == 'ivan'){
                $items = [
                    ['title' => 'Hola Ivan'],
                ];
            }else{
                $items = [
                    ['title' => 'Hola Gosha'],
                ];
                
            }
            return [
                '#theme'=> 'new_module',
                '#items' => $items,
                '#title' => 'listado de textos'
                //'#markup' => $this->t($text),
            ];
        }

    }
?>