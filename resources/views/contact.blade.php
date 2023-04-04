<style>
    .pgr{
        position: relative;
    }

    .halfhexagon{
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%);
        padding: 0 !important;
        height: 250px;
        width: auto;
        fill: white;
        stroke: white;
        stroke-width: 0;
    }

.contactTitle {
  position: relative;
  color: black;
  margin: 0 auto;
    font-family: "Playfair display";
  font-weight: 400;
  font-size: 1.5rem;
  text-align: center;
}

.contactTitle li{
    font-size: 1rem;
    list-style: none;
}






    
</style>

<x-layout>
    
    <div class="main">
        <div class="contactred mb-5"></div>
        <div class="mx-5 position-relative pgr">
            <img src="/images/program.png" alt="We are open between...">
            <div class="halfhexagon d-flex justify-content-center"> 
                <svg>
                    <polygon points="0,0 0,150 185,250 370,150 370,0"></polygon>
                </svg> 
            
                <div class="contactTitle">
                    
                        Working Hours 
                    
                            <li>Mon - Fri: 9am - 6pm</li>
                            <li>Sat: 10am - 2pm</li>
                            <li>Sun: Closed</li>
                       
                    {{-- </svg>  --}}
                    
                </div>
              
            </div>
            
        </div>
        <div class="col-10 mx-auto">
            <h1 style="font-size: 55px">FORMULAR DE CONTACT</h1>
            <div class="text-center">
                Veti primi un raspuns cu toate informatiile solicitate la 
                adresa de e-mail introdusa de tine. Te rugam să îți verifici și 
                folderul SPAM pentru mail-urile ce pot fi primite eronat în acest folder.
            </div>    
            
            <div class="subscribe">    
                <h3>Subscribe</h3>
                <div class="submitbtn">
                    <input type="submit" value="Submit">
                </div>
                <div class="email"> 
                    <img src="/images/email1.png">
                    <input type="text" name="email" placeholder="Email Address">
                </div>
            </div>
        </div>
    </div>
        
</x-layout>
