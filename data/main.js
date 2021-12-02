console.log('importato');

const cardsContainer = document.getElementById("cardsContainer");


axios.get("https://flynn.boolean.careers/exercises/api/array/music").then(resp =>{
 const dati = resp.data.dati;


 dati.forEach((response) => {
     const card =
        `
            <div class="card bnone " >
                <img src="${response.poster}" class="card-img-top" alt="disco.title">
                <div class="card-body cardBg">

                    <h3 class="card-title tittleColor">${response.title}</h3>
                    <p class="card-text textColor ">
                        <span>
                        ${response.author}<br> 
                        ${response.year}
                        </span>
                    </p>
                </div>
            </div>
        `;
    cardsContainer.innerHTML += card;
     
 });
//console.log(resp);

})