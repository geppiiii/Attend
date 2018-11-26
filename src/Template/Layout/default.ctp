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
 */

// $cakeDescription = 'CakePHP: the rapid development php framework';
$cakeDescription = 'GoogMoning';

?>
<!DOCTYPE html>
<html>
<head>
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


</head>
<body onload="change();">
<nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="#">出席管理システム</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if ($this->request->session()->read('Auth.User')): ?>
        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home">HR確認画面</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="lessonconf" >授業中確認画面</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="daily_output">日報出力画面</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="snumberlist">生徒登録画面</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="next_daily_change">翌日欠席登録</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout">ログアウト</a>
                </li>
            </ul>
        </div>
        <?php endif; ?>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
    $(function(){
      $('.nav-link').each(function(){
        var $href = $(this).attr('href');
        if(location.href.match($href)) {
          $(this).addClass('link');
        } else {
          $(this).removeClass('link');
        }
      });
    });
</script>
</body>
</html>
