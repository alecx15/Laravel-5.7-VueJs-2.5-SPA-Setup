<nav class="navbar navbar-default navbar-fixed-top navbar-transparent" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container-top">
            <div class="navbar-header-top">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img max-width="100%" src="{{ asset ('images/psittacus-systems.png') }}" alt="Psittacus Systems" class="navbar-brand-centered">
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                        <router-link tag="li" to="/" exact>
                            <a>Home</a>
                        </router-link>
            
                        <router-link tag="li" to="/about">
                            <a>About Psittacus.Systems</a>
                        </router-link>
                        <router-link tag="li" to="/lms">
                            <a>LMS & E-Learning</a>
                        </router-link>
                        <router-link tag="li" to="/tame">
                            <a>TAME™ Software</a>
                        </router-link>
                    <li><a href="#software">Software Development</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Website Design</a></li>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Facebook Ads</a></li>
                    <li><a href="#">Contact</a></li>		        
                    <li><a href="https://www.psittacus-ble.co.uk/login">BLE Login</a></li>		        
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>