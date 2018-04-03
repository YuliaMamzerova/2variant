<?php
function nav(){
	echo '
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Любовь к бисеру</a>
        </div>


        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?page=1">О бисере</a></li>
            <li><a href="index.php?page=2">Схемы</a></li>
            <li><a href="index.php?page=3">Контакты</a></li>
        
          </ul>
        </div><!--/.nav-collapse -->
      </div>
 </div>';
}
function main(){
 if (isset($_GET['page'])) {
 	$page=$_GET['page'];
 	
 }
 else {
 	$page=1;
 	
 }

switch ($page) {
	case '1':
		include ('./pages/index.php');
		break;
			case '2':
		include ('./pages/sxemy.php');
		break;
	case '3':
		include ('./pages/contacts.php');
		break;
	
	default:
		include ('./pages/index.php');
		break;
}

}
function nav_shema(){
	echo '
         <div id="dw-article-toc-body">
        <h2>Содержание</h2>
        <div class="ibm-alternate-rule">
          <hr/>
        </div>
        <ul role="directory" aria-label="Содержание" class="ibm-plain-list">
          <li><a href="index.php?page=2&shema=1"><big>Бисероплетение для начинающих</big></a></li>
          <li><a href="index.php?page=2&shema=2"><big>Вышивка бисером</big></a></li>
          <li><a href="index.php?page=2&shema=3"><big>Роза из бисера</big></a></li>
        </ul>
           </div>
      ';
}
function shema(){
 if (isset($_GET['shema'])) {
 	$shema=$_GET['shema'];
 	
 }
 else {
 	$shema=1;
 	
 }

switch ($shema) {
	case '1':
		include ('./shema/1.php');
		break;
	case '2':
		include ('./shema/2.php');
		break;
    case '3':
        include ('./shema/3.php');
        break;
	default:
		include ('./shema/1.php');
		break;
}
}