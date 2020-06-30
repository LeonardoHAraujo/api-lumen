<p>Título: API-lumen</p>

<p>Autor: Leonardo Araújo</p>

<p>A API foi criada com Lumen, para fins de estudo e conhecimento da micro-framework Lumen.</p>

<p>A API funciona da seguinte maneira:</p>

    A API é composta pelas quatro funções CRUD (create, read, update e delete),
    que são necessárias para o funcionamento da API.

    É uma API que guarda nomes e anos de nascimento fictícios de pessoas aleatórias
    geradas a partir de uma "Factory".

    Foi aplicado um filtro nas rotas (middleware) para que as requisições possam ser executadas.
    Como a API foi desenvolvida para fins de estudo o parâmetro "Key" (obrigatório) que tem 
    que vir como uma query string a cada requisição, 
    nada mais é do que um nome existente no banco de dados. Exemplo:

        Requisição GET : http://localhost:3333/?key=Leonardo
        // Lista todos os usuários do banco

        Requisição POST : http://localhost:3333/?key=Leonardo passando name e year.
        // Cria novo registro no banco

        Requisição PUT : http://localhost:3333/{id}?key=Leonardo passando name e year.
        // Atualiza registro existente

        Requisição DELETE : http://localhost:3333/{id}?key=Leonardo
        // Exclusão de registro existente
    
    OBS: Caso o Parametro "key" não for passado, o retorno de qualquer requisição será:

        {
            'Status' => 400,
            'Message' => 'Chave não encontrada. Requisição negada.'
        }

<p>Como testar em sua máquina:</p>

    1. Clone o repositório em sua máquina. (Baixando o ZIP ou pelo GIT);
    2. Copie todo o conteúdo de ".env.example", crie um arquivo ".env" e cole
       todo o conteúdo nele;
    3. Na opção "DB_DATABASE" dentro de ".env" coloque o nome da base como "api";
    4. Crie em sua conexão, um banco chamado "api";
    5. Tendo o composer instalado, rode o comando "Composer install" para gerar pasta vendor;
    6. Rode o comando "php artisan migrate" para criar as tabelas em seu banco;
    7. Rode o comando "php artisan db:seed" para gerar registros no banco;
    8. Rode o comando "php -S localhost:3333 -t public" para a execução da API.

    OBS: Como a chave "key" exigida, é um registro do banco você terá que olhar 
         em sua conexão quais nomes o Seeder gerou para que possa passar como
         parâmetro no ato da requisição.

--------------------------------------------------------------------------------------------------------------------------------------------------
# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
