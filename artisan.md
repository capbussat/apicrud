# pasos d'artisan
<!-- Taules -->
php artisan make:migration create_boards_table
php artisan make:migration create_trellolists_table
php artisan make:migration create_cards_table
php artisan make:migration create_card_user_table

php artisan migrate:fresh --seed

<!-- Models -->
php artisan make:model Board
php artisan make:model TrelloList
php artisan make:model Card
php artisan make:model CardUser

<!-- Factories -->
php artisan make:factory BoardFactory
php artisan make:factory TrelloListFactory
php artisan make:factory CardFactory
php artisan make:factory CardUserFactory

<!-- Seeder -->
php artisan migrate:fresh --seed

<!-- Controladors -->
php artisan make:controller BoardController
php artisan make:resource CardResource
php artisan make:controller Api/BoardController --api

<!-- Vistes -->
php artisan make:view board 

php artisan migrate:fresh --seed

<!-- Rutes -->
php artisan r:l
GET|HEAD        api/trellos      	 trellos.index › Api\TrelloController@index
POST            api/trellos      	 trellos.store › Api\TrelloController@store
PUT|PATCH       api/trellos/{trello} trellos.update › Api\TrelloController@update
DELETE          api/trellos/{trello} trellos.destroy › Api\TrelloController@destroy