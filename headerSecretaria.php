<!-- Logo -->
<a href="inicio" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><strong>O</strong>C</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><strong>Ocorr</strong>&ecirc;ncia</span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li>
                <a class="top-icon" data-toggle="modal" data-target="#nova-ocorrencia" data-placement="bottom" title="Nova ocorr&ecirc;ncia" href="#"><i class="fa fa-file-text"></i> <span class="label label-success">&#43;</span></a>
            </li>
            <!--<li>
                <a class="top-icon" data-toggle="modal" data-target="#nova-nota" data-placement="bottom" title="Nova nota" href="#"><i class="fa fa-sticky-note"></i> <span class="label label-success">&#43;</span></a>
            </li>-->
            <li>
                <a class="top-icon toggle-search" data-placement="bottom" title="Buscar ocorr&ecirc;ncia"><i class="fa fa-search"></i></a>
            </li>
            <!--<li>
                <a class="load-bkp" data-toggle="tooltip" data-placement="bottom" title="Back up do programa" href="backup.php"><i class="fa fa-database"></i></a>
            </li>-->
            <li>
                <a data-toggle="tooltip" data-placement="bottom" title="Sair" href="sair.php"><i class="fa fa-sign-out"></i></a>
            </li>
        </ul>
    </div>
</nav>

<div class="page-search">
    <div class="tb">
        <span class="page-search-close">&times;</span>
        <div class="tb-cell">
            <form>
                <input type="search" id="search-keyword-secretaria" title="Busque a ocorr&ecirc;ncia pelo serial, cliente, t&eacute;cnico, data, solicita&ccedil;&atilde;o, diagn&oacute;stico, procedimento, observa&ccedil;&atilde;o e item" placeholder="Serial, cliente, t&eacute;cnico, data, solicita&ccedil;&atilde;o, diagn&oacute;stico, procedimento, observa&ccedil;&atilde;o, item">
                <ul id="search-result" class="search-result"></ul>
            </form>
        </div> <!-- /.tb-cell -->
    </div> <!-- /.tb -->
</div> <!-- /.page-search -->

<div class="page-load">
    <div class="tb">
        <span class="page-load-close">&times;</span>
        <div class="tb-cell">
            <img src="img/rings-black.svg" title="Carregando..." alt="Carregando">
        </div> <!-- /.tb-cell -->
    </div> <!-- /.tb -->
</div> <!-- /.page-bkp -->