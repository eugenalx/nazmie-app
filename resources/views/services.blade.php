<x-layout>
    
        <style>
            .services{
                
            }
        
        .services-cat{
            position: relative;
            display:grid;
                grid-template-columns: 1fr 1fr 1fr;
                gap: 15px;
        }
        .img-services-cat{
            position: relative;
            
            width:100%;
    object-fit: cover;
    border-radius: 15px;
        }

        .cat-name{
            position: absolute;
            width: 100%;
            bottom: 0;
            text-align: center;
            background-color: grey;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            
        }
        </style>
        <div class="services">
            <div class="col-sm-10 col-md-10 mx-auto">
                <img class ='col-2 me-0' src="/images/logo.jpg" >
            </div>
            <div class=" col-10 mx-auto">
                <h3>Servicii Oferite în Salon<h3>
                <p> În spatele serviciilor oferite în salonul nostru stă  experiența de lucru perfecționată și îmbunătățită continuu dealungul a 16 ani de practică și studiu, astfel încât suntem în măsură să vă oferim o varietate de servicii excelente de beauty. 
                Datorită numeroaselor cursuri, workshopuri și târguri de profil, atât naționale cât și internaționale, la care trainerii noștri participă în mod frecvent, am reușit să dezvoltăm o gamă de produse profesionale de cea mai bună calitate și să oferim servicii de top la cele mai înalte standarde. 
                Experiența voastră la Nazmie Hair Academy nu se încheie odata cu părăsirea salonului deoarece echipa noastră vă oferă consultanță și în alegerea celor mai potrivite produse de îngrijire pentru acasă, pe care le puteți achiziționa chiar de la noi, produse profesionale care de altfel, nu se comercializează în magazine.
                Vă așteptăm in salon si va invitam la o cafea sa ne cunoastem mai bine!
                </p>
            </div>
            <div class="services-cat col-10 mx-auto">
                <div class="position-ref">
                    <img class="img-services-cat position-relative" src="/images/1.jpg" alt="">
                    <div class="cat-name">Tuns</div>
                </div>
                <div class="position-ref">
                    <img class="img-services-cat position-relative" src="/images/1.jpg" alt="">
                    <div class="cat-name">Tuns</div>
                </div><div class="position-ref">
                    <img class="img-services-cat position-relative" src="/images/1.jpg" alt="">
                    <div class="cat-name">Tuns</div>
                </div><div class="position-ref">
                    <img class="img-services-cat position-relative" src="/images/1.jpg" alt="">
                    <div class="cat-name">Tuns</div>
                </div><div class="position-ref">
                    <img class="img-services-cat position-relative" src="/images/1.jpg" alt="">
                    <div class="cat-name">Tuns</div>
                </div>
            </div>
            

        </div>
            





</x-layout>