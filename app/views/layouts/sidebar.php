<aside class="sidebar-layout">
    
    <div class="logo">
      <strong>CoA Admin</strong> <span class="dot"></span>
    </div>

    <nav>
        <ul class="sidebar-list">
            <li><a href="#" class="active">Pagina Principala</a></li>
            <li><a href="#" class="active">Evenimente </a></li>
            <li><a href="#" class="active">Adaposturi </a></li>
            <li><a href="#" class="active">Alerte CAP </a></li>
            <li><a href="#" class="active">Utilizatori </a></li>
            <li><a href="#" class="active">Import/Export </a></li>
        </ul>
    </nav>

    <div class="sidebar-footer" >
<!--Deconectarea schimba starea serverului-> distruge sesiunea => trebuie facut cu POST -->
      <form action="/logout" method="POST">
         <button class="btn-logout" type="submit">Deconectare</button>
      </form>
    </div>

</aside>
