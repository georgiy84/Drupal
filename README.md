# Descripcion

Es un modulo para Drupal 8/9 (es demostrasion/pruebas)

## Instalar

Para instalar module debe copiar el dirictorio con los ficheros al directorio dunde se encuentra el prollecto de drupal.
por ejemplo: drupal_project\web\modules\custom\new_module

Luego deberia activar/instalar el modulo, hay dos modos de realizar ese proceso:

1. Instalar con el interfas, para eso deberia ingresar al http://localhost/drupal_project/web/admin/modules en el campo de texto buscamos el modulo "New Module" realizar klic en el check box y luego en el boton instalar.
2. Instalar atravez de consola (solo en el caso si esta instalado "drush"), para hacer ese prosedimiento debe ejecutar sigiente comando: 

```bash
drush en new_module
```
o en el caso si no esta hecho el alias:
```bash
vendor/bin/drush en new_module
```
## El uso

para entrar al modulo puede ingresar con el URL: http://localhost/drupal_project/web/new-module

