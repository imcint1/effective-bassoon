<!DOCTYPE html>
<html lang="en">
    
    @include('templates.includes.head')
    
    <body>

        <div class="page-wrapper" id="page-wrapper">
            @include('templates.sidebar')
            
            <main class="content">
                @include('templates.navbar')
                
                @include('templates.subheader')
                
                <div class="page-content d-flex flex">
                    @yield('page-content')
                </div>
                
                @include('templates.includes.footer')
            </main>
        </div>
        
        @include('templates.includes.js')
        @include('templates.includes.ga')
    </body>
</html>