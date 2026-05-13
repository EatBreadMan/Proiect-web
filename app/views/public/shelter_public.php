<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adăposturi și Puncte de Sprijin - CoA</title>
    
    <!-- CSS Global -->
    <link rel="stylesheet" href="/CoA-project/public/css/global.css">
    
    <!-- Leaflet.js CSS pentru hartă -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    
    <!-- CSS Layout Hartă + Listă -->
    <link rel="stylesheet" href="/CoA-project/public/css/map-page.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <div class="dot"></div>
            <strong>CoA</strong>
        </div>
        <button class="menu-toggle" id="mobile-menu-btn">☰</button>
        <ul class="nav-links" id="nav-links">
            <li><a href="Events.php">Acasă</a></li>
            <li><a href="/CoA-project/app/views/public/events_public.php">Evenimente</a></li>
            <li><a href="/CoA-project/app/views/public/shelter_public.php" class="active">Adăposturi</a></li>
            <li class="mobile-login"><a href="/CoA-project/app/views/public/login.html" class="btn-login">Login </a></li>
        </ul>
        <a href="/CoA-project/app/views/public/login.html" class="btn-login desktop-login">Login </a>
    </nav>

    <div style="padding: 0 1rem; max-width: 98%; margin: 0 auto; width: 100%;">
        <!-- Bara de Filtre -->
        <div class="filters-bar" style="margin-top: 1.5rem;">
            <button class="filter-btn active" data-filter="all">Toate</button>
            <button class="filter-btn" data-filter="buncar">Buncăre Subterane</button>
            <button class="filter-btn" data-filter="medical">Puncte de Prim Ajutor</button>
            <button class="filter-btn" data-filter="provizii">Centre Provizii</button>
        </div>

        <!-- Container Hartă și Listă -->
        <div class="page-layout-split">
            
            <!-- Secțiunea Hărții -->
            <div class="map-container">
                <div id="shelters-map" style="height: 100%; width: 100%; border-radius: var(--radius-md); z-index: 1;"></div>
            </div>

            <!-- Secțiunea Listei (Flashcard-uri) -->
            <div class="list-container events-list" id="shelters-list">
                <!-- Cardurile vor fi generate din JavaScript -->
            </div>

        </div>
    </div>

    <!-- Scripturi Leaflet -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        var map = L.map('shelters-map').setView([47.165, 27.58], 14);
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        var shelters = [
            { 
                type: "Buncăr", name: "Școala Gimnazială (Centru)", filterType: "buncar",
                address: "Str. Palat, nr. 1", details: "Capacitate 200 persoane • Acces Deschis", 
                lat: 47.1573, lng: 27.5869, colorClass: "border-teal", badgeClass: "bg-teal"
            },
            { 
                type: "Punct Medical", name: "Spitalul Sf. Spiridon - Cort Triage", filterType: "medical",
                address: "Bd. Independenței, nr. 1", details: "Capacitate 50 paturi • Triage rapid", 
                lat: 47.1670, lng: 27.5815, colorClass: "border-orange", badgeClass: "bg-orange"
            },
            { 
                type: "Provizii", name: "Centrul Comunitar Copou", filterType: "provizii",
                address: "Bd. Carol I, nr. 11", details: "Apă potabilă, pături, alimente neperisabile", 
                lat: 47.1745, lng: 27.5722, colorClass: "border-red", badgeClass: "bg-red"
            }
        ];

        var listContainer = document.getElementById('shelters-list');

        shelters.forEach(function(shelter) {
            // Marker pe hartă
            var marker = L.marker([shelter.lat, shelter.lng]).addTo(map);
            marker.bindPopup(`<b>${shelter.name}</b><br>${shelter.type}`);

            var cardHTML = `
                <div class="card ${shelter.colorClass}" data-type="${shelter.filterType}">
                    <div class="card-badges">
                        <span class="badge ${shelter.badgeClass}">${shelter.type}</span>
                    </div>
                    <h3>${shelter.name}</h3>
                    <p class="location">📍 ${shelter.address}</p>
                    <p class="time">ℹ️ ${shelter.details}</p>
                    <a href="#" class="btn-link" onclick="map.setView([${shelter.lat}, ${shelter.lng}], 16); return false;">Vezi pe hartă &rarr;</a>
                </div>
            `;
            
            listContainer.innerHTML += cardHTML;
        });
    </script>
    
    <script src="/CoA-project/public/js/main.js"></script>
</body>
</html>