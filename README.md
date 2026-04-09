# CoA — Crisis Containment Service

O platformă Web pentru monitorizarea și gestionarea situațiilor de urgență (cutremure, inundații, incendii etc.), 
destinată atât autorităților, cât și publicului general.

## Funcționalități

### Public
- Hartă interactivă cu evenimentele active și zonele afectate
- Listă evenimente filtrabilă după tip, severitate și județ
- Informații despre adăposturi disponibile și rute de evacuare per tip de calamitate
- Vizualizare alerte oficiale transmise prin Common Alerting Protocol (CAP)

### Autorități
- Gestionare evenimente de urgență (adăugare, editare, ștergere)
- Trimitere alerte CAP către populație
- Gestionare adăposturi și rute de evacuare
- Import/export date în format CSV, JSON și XML

### Admin
- Gestionare conturi autorități
- Statistici generale despre evenimente și resurse

## Tech stack
- Backend: PHP + PostgreSQL
- Frontend: HTML + CSS + JavaScript vanilla
- Hartă: Leaflet.js + OpenStreetMap
- Arhitectură: MVC
