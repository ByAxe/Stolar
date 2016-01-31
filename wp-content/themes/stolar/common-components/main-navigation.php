<nav class="navbar yamn navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                <span class="sr-only">Open Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>/"><i class="fa fa-home fa-fw"></i>&nbsp; Столяр.by</a>
        </div>
        <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Главная</a></li>
                <li class="dropdown yamn-fw">
                    <a href="<?php echo esc_url(home_url('/')); ?>/profile">Выполняемые работы</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-content">
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9"></div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown yamn-fw">
                    <a href="<?php echo esc_url(home_url('/')); ?>/gallery">Галерея</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-content">
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9"></div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown yamn-fw">
                    <a href="<?php echo esc_url(home_url('/')); ?>/contacts">Контакты</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-content">
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9"></div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown yamn-fw">
                    <a href="<?php echo esc_url(home_url('/')); ?>/order-form">Форма заказа</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-content">
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9"></div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>