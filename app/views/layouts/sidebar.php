<aside class="sidebar-layout">
    
    <div class="logo">
      <strong>CoA Admin</strong> <span class="dot"></span>
    </div>

    <nav>
            <ul class="sidebar-list">
            <li><a href="/CoA-project/app/views/admin/dashboard.php">Dashboard</a></li>
            <li><a href="/CoA-project/app/views/admin/events.php">Evenimente</a></li>
            <li><a href="/CoA-project/app/views/admin/shelters.php">Adaposturi</a></li>
            <li><a href="/CoA-project/app/views/admin/alerts.php">Alerte CAP</a></li>
            <li><a href="/CoA-project/app/views/admin/users.php">Utilizatori</a></li>
            <li><a href="/CoA-project/app/views/admin/import-export.php">Import/Export</a></li>
        </ul>
    </nav>

    <div class="sidebar-footer" >
<!--Deconectarea schimba starea serverului-> distruge sesiunea => trebuie facut cu POST -->
      <form action="/logout" method="POST">
         <button class="btn-logout" type="submit">Deconectare</button>
      </form>
    </div>

</aside>
