<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        $connection = ConnectionManager::get($name);
        $connected = $connection->connect();
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
    }

    return compact('connected', 'error');
};

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Trabalho final de desenvolvimento web
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="container text-center">
                <img alt="CakePHP" src="https://blog.wyden.com.br/wp-content/uploads/2022/04/martha-falcao.png" width="350" />
            </a>
            <h1>
                Olá Professor e turma 😊
            </h1>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">  
                <div class="row">
                    <div class="column">
                        <h4>Equipe</h4>
                        <ul>
                            <li class="bullet success">Adriana Nascimento pinheiro.</li>

                            <li class="bullet success">Bruna figueiredo</li>

                            <li class="bullet success">Eduardo Figueiredo</li>

                            <li class="bullet success">Lucas Claudino</li>

                            <li class="bullet success">William Halley</li>
                        </ul>
                    </div>
                    <div class="column">
                        <h4>Tecnologias utilizadas</h4>
                        <ul>
                            <li class="bullet success">Html 5</li>

                            <li class="bullet success">Php 7 (Cakephp)</li>

                            <li class="bullet success">Css (Milligram)</li>
                        </ul>
                    </div>
                </div>
                <hr>

                <hr>
                <div class="row">
                    <div class="column links">
                        <h3>Comece aqui!</h3>
                        <a href="/crud2/produtos/">Ir para o CRUD</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </main>
</body>
</html>
