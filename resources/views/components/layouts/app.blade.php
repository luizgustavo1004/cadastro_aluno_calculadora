<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <title>{{ $title ?? 'Aluno' }}</title>
    </head>
    <body>
        
  
       
        
        







        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Space Calculator</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Abas</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Link</a></li>
                      <li><a class="dropdown-item" href="#">Another link</a></li>
                      <li><a class="dropdown-item" href="#">A third link</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>












        
        <div class="container">
        {{ $slot }}
         </div>
    
        

           
                <footer style="height: 76px" class="py-3 bg-dark">
                  <p class="text-center text-white">© 2025 Space Calculator, Todos os direitos reservados</p>
                </footer>
    

      
    
    
    
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    </body>
</html>
