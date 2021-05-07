<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html class="h-100">

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>


    <script src="" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
    <script src="" integrity="sha512-zO8oeHCxetPn1Hd9PdDleg5Tw1bAaP0YmNvPY8CwcRyUk7d7/+nyElmFrB6f7vg4f7Fv4sui1mcep8RIEShczg==" crossorigin="anonymous"></script>
    <script src="" integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA==" crossorigin="anonymous"></script>
    <script src="" integrity="sha512-hZf9Qhp3rlDJBvAKvmiG+goaaKRZA6LKUO35oK6EsM0/kjPK32Yw7URqrq3Q+Nvbbt8Usss+IekL7CRn83dYmw==" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <?= $this->Html->css([
        'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',
        'stylesheet',
        'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css',
        'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css',
        '../fontello/css/fontello.css',
    ]) ?>

    <?= $this->Html->script([
            'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js',
            'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js'
    ]) ?>
</head>

<body class="h-100">
    <div class="container-fluid h-100 ">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
    <!-- <main class="main"> -->

        <!-- </main> -->
        <footer>
        </footer>
        <?= $this->Html->script([
            'https://code.jquery.com/jquery-3.6.0.min.js',
            'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js'
            
        ]) ?>
</body>

</html>