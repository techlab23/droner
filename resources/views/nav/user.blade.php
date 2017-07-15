<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <div class="hamburger">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Branding Image -->
                @include('nav.brand')
            </div>

            <div class="collapse navbar-collapse" id="navbar">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    @includeIf('nav.user-left')
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    @includeIf('nav.user-right')                   
                </ul>
            </div>
        </div>
</nav>