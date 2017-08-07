<div id="header-wrapper">
    
    <div id="header">
        <div class="container">
            <!-- Logo -->
            <div id="logo">
                <a href="/"><img src="static/images/logo_v2.png"><img src="static/images/logo_v2_hover.png" class="logo-hover"></a>
            </div>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li <?=($_SERVER['REQUEST_URI'] == '/' ? ' class="current" ' : '')?>><a href="/">Главная</a></li>
                    <li <?=($_SERVER['REQUEST_URI'] == '/company' ? ' class="current" ' : '')?>><a href="/company">О нас</a></li>
                    <li <?=($_SERVER['REQUEST_URI'] == '/service' ? ' class="current" ' : '')?>><a href="/service">Услуги</a></li>
                    <li <?=($_SERVER['REQUEST_URI'] == '/keys' ? ' class="current" ' : '')?>><a href="/keys" >Портфолио</a></li>
                    <li <?=($_SERVER['REQUEST_URI'] == '/contact' ? ' class="current" ' : '')?>><a href="/contact" >Контакты</a></li>
                </ul>
                <span style="display: inline-block;" class="callback btn btn-block btn-large btn-success modal_btn" hint="Нажмите, что бы заказать звонок"><a>8 (800) 654 657 43</a></span>
            </nav>
        </div>
    </div>    

</div>