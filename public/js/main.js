document.addEventListener('DOMContentLoaded', function() {
  

  const menuBtn = document.getElementById('mobile-menu-btn');
  const navLinks = document.getElementById('nav-links');

  if (menuBtn && navLinks) {
    menuBtn.addEventListener('click', function() {
      // Adaugă sau scoate clasa 'active' pentru a arăta/ascunde meniul
      navLinks.classList.toggle('active');
      
      // Schimbă iconița din Hamburger (☰) în X (✕)
      if (navLinks.classList.contains('active')) {
        menuBtn.innerHTML = '✕';
      } else {
        menuBtn.innerHTML = '☰';
      }
    });
  }

  
  const filterBtns = document.querySelectorAll('.filter-btn');
  const eventCards = document.querySelectorAll('.events-list .card');

  // Verificăm dacă suntem pe o pagină care are butoane de filtru (ex: pagina principală)
  if (filterBtns.length > 0 && eventCards.length > 0) {
    
    // Adăugăm funcționalitate pentru fiecare buton de filtru
    filterBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        
        // 1. Efectul vizual: 
        // Eliminăm clasa 'active' de pe TOATE butoanele
        filterBtns.forEach(b => b.classList.remove('active'));
        // Adăugăm clasa 'active' DOAR pe butonul pe care am dat click
        this.classList.add('active');

        // 2. Citim ce filtru a fost selectat (ex: "cutremur", "inundatie" sau "all")
        const selectedFilter = this.getAttribute('data-filter');

        // 3. Trecem prin fiecare card din listă
        eventCards.forEach(card => {
          // Citim tipul ascuns al cardului
          const cardType = card.getAttribute('data-type');

          // Dacă filtrul e pe "Toate" SAU dacă tipul cardului se potrivește cu butonul
          if (selectedFilter === 'all' || cardType === selectedFilter) {
            card.style.display = 'flex'; // Îl lăsăm vizibil
          } else {
            card.style.display = 'none'; // Îl ascundem
          }
        });
        
      });
    });
  }
  
});