## Laravel API POSTS CRUD 
(text en català)

## Descarrega amb git clone, executa composer update i executa php artisan serve

# Crea un nou directori, a dins descarrega

git clone https://github.com/capbussat/apicrud.git

# bàsicament actualitza el directori vendor 
composer update

php artisan serve

## Provat amb Postman amb aquestes rutes

GET|HEAD   	api/posts   		posts.index › Api\PostController@index  
POST     	api/posts   		posts.store › Api\PostController@store  
PUT|PATCH 	api/posts/{post}    posts.update › Api\PostController@update  
DELETE      api/posts/{post}    posts.destroy › Api\PostController@destroy

Des de l'aplicació postman pots Importar el següent fitxer i fer les 4 proves: 
REST APICRUD.postman_collection.json

## Laravel Feature API Tests
Pots comprovar també que compleix alguns tests de prova que hem dissenyat. 
No són complerts. Podries afegir-ne i millorar els tests.
Els tests a Laravel per l'api son a /tests/FeaturePostTest.php

# Execute tests
php artisan test

# Resultat dels tests
 PASS  Tests\Unit\ExampleTest
  ✓ that true is rue                                                                                        0.41s  

   PASS  Tests\Feature\ExampleTest
  ✓ the application returns a successful response                                                            3.34s  

   PASS  Tests\Feature\PostTest
  ✓ homepage                                                                                                 1.51s  
  ✓ api posts index                                                                                          0.55s  
  ✓ api posts store                                                                                          0.42s  
  ✓ api posts store error no title                                                                           0.04s  
  ✓ api posts store error no content                                                                         0.02s  

  Tests:    7 passed (8 assertions)
  Duration: 8.03s

  # Documents adicionals

  Laravel, que son els resources
  https://laravel.com/docs/10.x/eloquent-resources

  Crea un CRUD API senzill  (english)
  https://medium.com/@miladev95/how-to-create-rest-api-crud-in-laravel-10-8a5d09cd7901

  Crear un API REST en Laravel una mica més dificil, amb autoritzacions
  https://notasweb.me/entrada/crear-un-api-rest-en-laravel/#Configuracion_Archivos_Resource_y_Controller

  # Documentació amb autoritzacions.
  Laravel gates, Policies, Roles and Permissions
  
  Complert API CRUD amb autoritzacions (gates i policies). (english)
  https://www.linkedin.com/pulse/complete-guide-building-restful-apis-laravel-amjad-ghneim-emnlf/

  Gates (Permissions and Roles) |Yelo Code |Tutorial #36 (english)
  https://www.youtube.com/watch?v=wK-dtZyN8p0

  Laravel Daily, molt interesant (english)
  Laravel Roles and Permissions: All CORE Things You Need To Know
  https://www.youtube.com/watch?v=kZOgH3-0Bko

  Postman
  Com realitzar les proves de Postman
  https://www.encora.com/es/blog/como-realizar-pruebas-automatizadas-con-postman