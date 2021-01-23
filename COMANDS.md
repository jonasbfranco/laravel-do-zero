# Laravel do Zero YouTube - Beer and Code)
[Link da Playlist no YouTube](https://www.youtube.com/watch?v=eiYfQzDLyeY&list=PL7ScB28KYHhHEC8DGfhDt7WdHe7s6A56J)

### Depois de Baixar o projeto
~~~php
- $ composer install
~~~

### Configure o arquivo .env
~~~php
- DB_DATABASE=laravel_do_zero
~~~

### Criar o Controller Contact
~~~php
- $ php artisan make:controller Site/ContactController -r
~~~

### Criar o Controller Blog (pagina estatica)
~~~php
- $ php artisan make:controller Site/BlogController --invokable
~~~

### Entrar no Tinker para testara  conexao com o banco laravel_do_zero (criado no MySQL)
~~~php
- $ php artisan tinker
- $ DB::connection()->getPdo();
~~~

### Criar um projeto
~~~php
- $ composer create-project laravel/laravel laravel-do-zero
~~~

