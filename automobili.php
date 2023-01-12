<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="automobil.css">
    <title>Automobil</title>
</head>
<body>
    <header>
        <a href="index.html" ><img src="slike/logo.jpg" alt="nista"></a>
        <nav>
            <ul>
                <li>
                    <a href="login.html" target="_blank">PRIJAVI SE</a>
                </li>
                <li>
                    <a href="register.html" target="_blank">REGISTRUJ SE</a>
                </li>
                <li>
                    <a href="automobili.html" target="_blank">POSTAVI OGLAS</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="fotografija">
        <p>Unos fotografije</p>
        <button>Dodaj fotografiju</button>
    </div>
    <p>Marka i Model</p>
    <div class="jedan">
        
        <select>
            <option value="" disabled selected hidden>Marka vozila</option>
            <option value="1">Alfa Romeo</option>
            <option value="2">Audi</option>
            <option value="3">BMW</option>
            <option value="4">Chevrolet</option>
            <option value="5">Citroen</option>
            <option value="6">Dodge</option>
            <option value="7">Ferrari</option>
            <option value="8">Fiat</option>
            <option value="8">Ford</option>
            <option value="9">Honda</option>
            <option value="10">Hyundai</option>
            <option value="11">Jaguar</option>
            <option value="12">Jeep</option>
            <option value="13">Lamborghini</option>
            <option value="14">Mazda</option>
            <option value="15">Mitsubishi</option>
            <option value="16">Nissan</option>
            <option value="17">Opel</option>
            <option value="18">Peugeto</option>
            <option value="19">Porsche</option>
            <option value="20">Rover</option>
            <option value="21">Subaru</option>
            <option value="22">Suzuki</option>
            <option value="23">Tesla</option>
            <option value="24">Toyota</option>
            <option value="25">Volvo</option>
            <option value="26">Volkswagen</option>
            <option value="27">Skoda</option>

        </select>
        <input type="text" name="model" placeholder=" Model" style="width: 300px; height: 40px; ">
    </div>
    <p>Osnovne informacije</p>
    <div class="dva">

        
        <input class= "godisteod" type="text" name="godiste od" placeholder=" Godiste do">
        <select >
            <option value="" disabled selected hidden>Karoserija</option>
            <option value="1">Limuzina</option>
            <option value="2">Hecbek</option>
            <option value="3">Karavan</option>
            <option value="4">Kupe</option>
            <option value="5">Kabriolet</option>
            <option value="6">MiniVan</option>
            <option value="7">SUV</option>
            <option value="8">Pickup</option>
        </select>
        <select>
            <option value="gorivo" disabled selected hidden>Gorivo</option>
            <option value="1">Dizel</option>
            <option value="2">Benzin</option>
            <option value="3">Benzi + Gas</option>
            <option value="4">Benzin + Metan</option>
            <option value="5">Elektricni pogon</option>
            <option value="6">Hibridni pogon</option>
        </select>
    </div>
    <p>Dodatne informacije</p>
    <div class="tri">
        

        <input class= "Kubikaza" type="text" name="kubikaza" placeholder=" Kubikaza (cm3)">
        <input class= "Snaga" type="text" name="snaga" placeholder=" Snaga (kW)">
        <input class= "Snaga" type="text" name="snaga" placeholder=" Snaga (kS)">
        <input class= "Kilometraza" type="text" name="kilometraza" placeholder=" Kilometraza">
        
        <select>
            <option value="emisiona" disabled selected hidden>Emisiona klasa motora</option>
            <option value="1">Euro 1</option>
            <option value="2">Euro 2</option>
            <option value="3">Euro 3</option>
            <option value="4">Euro 4</option>
            <option value="5">Euro 5</option>
            <option value="6">Euro 6</option>
        </select>
        <select>
            <option value="pogon" disabled selected hidden>Pogon</option>
            <option value="1">Prednji</option>
            <option value="2">Zadnji</option>
            <option value="3">4x4</option>
            <option value="4">4x4 reduktor</option>
        </select>
        <select>
            <option value="menjac" disabled selected hidden>Menjac</option>
            <option value="1">Manuelni 4 brzina</option>
            <option value="2">Manuelni 5 brzina</option>
            <option value="3">Manuelni 6 brzina</option>
            <option value="4">utomatski / poluautomatski</option>
        </select>
        <select>
            <option value="vrata" disabled selected hidden>Broj vrata</option>
            <option value="1">2/3 vrata</option>
            <option value="2">4/5 vrata</option>
        </select>
        <select>
            <option value="sedista" disabled selected hidden>Broj sedista</option>
            <option value="1">2 sedista</option>
            <option value="2">3 sedista</option>
            <option value="3">4 sedista</option>
            <option value="4">5 sedista</option>
            <option value="5">6 sedista</option>
            <option value="6">7 sedista</option>
            <option value="7">8 sedista</option>
            <option value="8">9 sedista</option>
        </select>
        <select>
            <option value="Strana" disabled selected hidden>Strana volana</option>
            <option value="1">Levi volan</option>
            <option value="2">Desni volan</option>
        </select>
        <select>
            <option value="klima" disabled selected hidden>Klima</option>
            <option value="1">Nema klimu</option>
            <option value="2">Manuelna klima</option>
            <option value="3">Automatska klima</option>
        </select>
        <select>
            <option value="boja" disabled selected hidden>Boja</option>
            <option value="1">Bela</option>
            <option value="2">Bez</option>
            <option value="3">Bordo</option>
            <option value="4">Braon</option>
            <option value="5">Crna</option>
            <option value="6">Crvena</option>
            <option value="7">Krem</option>
            <option value="8">Ljubicasta</option>
            <option value="9">Narandzasta</option>
            <option value="10">Plava</option>
            <option value="11">Siva</option>
            <option value="12">Smedja</option>
            <option value="13">Srebrna</option>
            <option value="14">Teget</option>
            <option value="15">Zelena</option>
            <option value="16">Zlatna</option>
            <option value="17">Zuta</option>
        </select>
        <select>
            <option value="Materijal" disabled selected hidden>Materijal enterijera</option>
            <option value="1">Stof</option>
            <option value="2">Prirodna koza</option>
            <option value="3">Kombinovana koza</option>
            <option value="4">Velur</option>
            <option value="5">Drugi</option>
        </select>
        <select>
            <option value="bojae" disabled selected hidden>Boja enterijera</option>
            <option value="1">Crna</option>
            <option value="2">Bez</option>
            <option value="3">Smedja</option>
            <option value="4">Siva</option>
            <option value="5">Druga</option>
        </select>
        <select>
            <option value="registracija" disabled selected hidden>Registrovan do</option>
            <option value="1">Nije registrovan</option>
            <option value="2">01.2023</option>
            <option value="3">02.2023</option>
            <option value="4">03.2023</option>
            <option value="5">04.2023</option>
            <option value="6">05.2023</option>
            <option value="7">06.2023</option>
            <option value="8">07.2023</option>
            <option value="9">08.2023</option>
            <option value="10">09.2023</option>
            <option value="11">10.2023</option>
            <option value="12">11.2023</option>
            <option value="13">12.2023</option>

        </select>
        <select>
            <option value="ostecenja" disabled selected hidden>Ostecenja</option>
            <option value="1">Nije ostecen</option>
            <option value="2">Ostecen - u voznom stanju</option>
            <option value="3">Ostecen - nije u voznom stanju</option>
        </select>
        <select>
            <option value="zamena" disabled selected hidden>Zamena</option>
            <option value="1">Bez zamene</option>
            <option value="2">Zamena za jeftinije</option>
            <option value="3">U istoj ceni</option>
            <option value="4">Zamena za skuplje</option>
            <option value="5">Svejedno</option>
        </select>
    </div>
<div class="cetri">
    <p>Oprema</p>
        <form>
            <label><input type="checkbox"> <span>Metalik boja</span></label>
            <label><input type="checkbox"> <span>Tempomat</span></label>
            <label><input type="checkbox"> <span>Panorama krov</span></label>

            <label><input type="checkbox"> <span>Svetla za maglu</span></label>
            <label><input type="checkbox"> <span>Parking senzor</span></label>
            <label><input type="checkbox"> <span>Aluminijumske felne</span></label>
            <label><input type="checkbox"> <span>Radio CD</span></label>
            <label><input type="checkbox"> <span>Automatsko parkiranje</span></label>
            <label><input type="checkbox"> <span>Multimedija</span></label>
            <label><input type="checkbox"> <span>Dnevna svetla</span></label>
            <label><input type="checkbox"> <span>360 kamera</span></label>
            <label><input type="checkbox"> <span>Volan u kombinaciji drvo/koza</span></label>
            <label><input type="checkbox"> <span>Ventilacija sedista</span></label>
            <label><input type="checkbox"> <span>MP3</span></label>
            <label><input type="checkbox"> <span>Drzac za casu</span></label>
            <label><input type="checkbox"> <span>Rezervni tocak</span></label>
            <label><input type="checkbox"> <span>Branici u boji auta</span></label>
            <label><input type="checkbox"> <span>Daljinsko zakljucavanje</span></label>
            <label><input type="checkbox"> <span>Sediste podesivo po visini</span></label>
            <label><input type="checkbox"> <span>Navigacija</span></label>
            <label><input type="checkbox"> <span>LED zadnja svetla</span></label>
            <label><input type="checkbox"> <span>Kamera</span></label>
            <label><input type="checkbox"> <span>Sportska sedista</span></label>
            <label><input type="checkbox"> <span>Grejanje volana</span></label>
            <label><input type="checkbox"> <span>Vazdusno vesanje</span></label>
            <label><input type="checkbox"> <span>Digitalni radio</span></label>
            <label><input type="checkbox"> <span>Rucice za menjanje brzine na volanu</span></label>
            <label><input type="checkbox"> <span>Indikator niskog pritiska u gumama</span></label>
            <label><input type="checkbox"> <span>Servo volan</span></label>
            <label><input type="checkbox"> <span>Putni racunar</span></label>
            <label><input type="checkbox"> <span>Elektricni podizci</span></label>
            <label><input type="checkbox"> <span>Elektro podesiva sedista</span></label>
            <label><input type="checkbox"> <span>Senzori za svetla</span></label>
            <label><input type="checkbox"> <span>Krovni nosac</span></label>
            <label><input type="checkbox"> <span>Bluetooth</span></label>
            <label><input type="checkbox"> <span>Naslno za ruke</span></label>
            <label><input type="checkbox"> <span>Masazna sedista</span></label>
            <label><input type="checkbox"> <span>Sportsko vesanje</span></label>
            <label><input type="checkbox"> <span>Ekran na dodir</span></label>
            <label><input type="checkbox"> <span>Elektro zatvaranje prtljaznika</span></label>
            <label><input type="checkbox"> <span>Paljenje bez kljuca</span></label>
            <label><input type="checkbox"> <span>Ambijentalno osvetljenje</span></label>
            <label><input type="checkbox"> <span>Podesavanje volana po visini</span></label>
            <label><input type="checkbox"> <span>Retrovizor se obara pri rikvercu</span></label>
            <label><input type="checkbox"> <span>Keramicke kocnice</span></label>
            <label><input type="checkbox"> <span>Modovi voznje</span></label>
            <label><input type="checkbox"> <span>Multifunkcionalni volan</span></label>
            <label><input type="checkbox"> <span>Elektricni retrovizori</span></label>
            <label><input type="checkbox"> <span>Grejanje sedista</span></label>
            <label><input type="checkbox"> <span>Senzori za kisu</span></label>
            <label><input type="checkbox"> <span>Kuka za vucu</span></label>
            <label><input type="checkbox"> <span>Radio</span></label>
            <label><input type="checkbox"> <span>Prednja nocna kamera</span></label>
            <label><input type="checkbox"> <span>Elektro sklopivi retrovizori</span></label>
            <label><input type="checkbox"> <span>Brisaci prednjih farova</span></label>
            <label><input type="checkbox"> <span>Kozni volan</span></label>
            <label><input type="checkbox"> <span>Subwoofer</span></label>
            <label><input type="checkbox"> <span>Elektronska rucna kocnica</span></label>
        </form>
</div>
<div class="stanje">
    <p>Stanje vozila</p>
    <form>
        <label><input type="checkbox"> <span>Prvi vlasnik</span></label>
        <label><input type="checkbox"> <span>Kupljen nov u Srbiji</span></label>
        <label><input type="checkbox"> <span>Garancija</span></label>
        <label><input type="checkbox"> <span>Garaziran</span></label>
        <label><input type="checkbox"> <span>Servisna knjiga</span></label>
        <label><input type="checkbox"> <span>Rezervni kljuc</span></label>
        <label><input type="checkbox"> <span>Restauriran</span></label>
        <label><input type="checkbox"> <span>Oldtimer</span></label>
        <label><input type="checkbox"> <span>Prilagodjeno invalidima</span></label>
        <label><input type="checkbox"> <span>Taxi</span></label>
        <label><input type="checkbox"> <span>Test vozilo</span></label>
        <label><input type="checkbox"> <span>Tuning</span></label>
        <label><input type="checkbox"> <span>Vozilo auto skole</span></label>
    </form>
</div>
<div class="nacin">
    <p>Nacin finansiranja</p>
    <form>
        <label><input type="checkbox"> <span>Prepustanje kredita</span></label>
        <label><input type="checkbox"> <span>Lizing</span></label>
    </form>
</div>
<div class="nacin1">
    <p>Nacin prodaje</p>
    <select>
        <option value="prodaja" disabled selected hidden>Odaberi nacin prodaje</option>
            <option value="1">Komisiona</option>
            <option value="2">Konsignaciona</option>
    </select>
</div>
<div class="cena">
    <p>Cena</p>
    <input class= "Cena" type="text" name="cena" placeholder=" Cena">
</div>
<div class="cena1">
    <form>
        <label><input type="checkbox"> <span>Fiksna cena</span></label>    
    </form>
</div>
<div class="opis">
    <p>Opis oglasa</p>
    <input class= "Opis" type="text" name="opis" placeholder=" Unesi opis oglasa">
</div>
<p>Kontakt podaci</p>
<div class="kontakt">
    
    <input class= "Grad" type="text" name="grad" placeholder=" Mesto">
    <input class= "Postanski broj" type="text" name="Postanski broj" placeholder=" Postanski broj">
    <select>
        <option value="okrug" disabled selected hidden>Okrug</option>
        <option value="1">Beograd</option>
        <option value="2">Borski</option>
        <option value="3">Branicevski</option>
        <option value="4">Jablanicki</option>
        <option value="5">Juzno-backi</option>
        <option value="6">Juzno-banatski</option>
        <option value="7">Kolubarski</option>
        <option value="8">Kosovski</option>
        <option value="9">Macvanski</option>
        <option value="10">Moravicki</option>
        <option value="11">Nisavski</option>
        <option value="12">Pecki</option>
        <option value="13">Pirotski</option>
        <option value="14">Podunavski</option>
        <option value="15">Pomoravski</option>
        <option value="16">Raski</option>
        <option value="17">Severno-backi</option>
        <option value="18">Severno-banatski</option>
        <option value="19">Srednje-banatski</option>
        <option value="20">Sremski</option>
        <option value="21">Sumadijski</option>
        <option value="22">Toplicki</option>
        <option value="23">Zajecarski</option>
        <option value="24">Zlatiborski</option>
    </select>
    <select>
        <option value="drzava" disabled selected hidden>Drzava</option>
        <option value="1">Srbija</option>
        <option value="2">Crna Gora</option>
        <option value="3">Bosna i Hercegovina</option>
        <option value="4">Belgija</option>
        <option value="5">Francuska</option>
        <option value="6">Holandija</option>
        <option value="7">Italija</option>
        <option value="8">Nemacka</option>
        <option value="9">Rusija</option>
        <option value="10">Svajcarska</option>
        <option value="11">Velika Britanija</option>
        <option value="12">Austrija</option>
        <option value="13">Bugarska</option>
        <option value="14">Ceska</option>
        <option value="15">Danska</option>
        <option value="16">Hrvatska</option>
        <option value="17">Irska</option>
        <option value="18">Makedonija</option>
        <option value="19">Madjarska</option>
        <option value="20">Rumunija</option>
        <option value="21">Slovenija</option>
        <option value="22">Spanija</option>
        <option value="23">Svedska</option>
        <option value="24">Poljska</option>
        <option value="25">Norveska</option>
        <option value="26">Ostale zemlje</option>
    </select>
    <input class= "Adresa" type="text" name="Adresa" placeholder=" Adresa">
    <input class= "Mobilni" type="text" name="Mobilni" placeholder=" Mobilni">
    <input class= "Telefon" type="text" name="Telefon" placeholder=" Telefon">
    <input class= "Ime" type="text" name="Ime" placeholder=" Ime">
    <input class= "Prezime" type="text" name="Prezime" placeholder=" Prezime">

</div>
<div class="dugme">
    <button>POSTAVI OGLAS</button>
</div>
</body>
</html>