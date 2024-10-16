// Name - Fernando Pulle N S
// IT no - IT23836440

let currentSection = null;

function contentLoad(section, element) {

       if (currentSection) {
              currentSection.classList.remove('selected');
       }

       element.classList.add('selected');
       currentSection = element;

       const cardsData = {
              before: [
                     {
                            image: './images/donationProcess/before1.jpeg',
                            title: 'Make an Appointment',
                            description: 'Select a donation type and find a convenient time that works best for you..'
                     },
                     {
                            image: './images/donationProcess/before2.jpeg',
                            title: 'Get the Dish on Nutrition',
                            description: 'Have iron-rich foods, such as red meat, fish, poultry, beans, spinach, iron-fortified cereals or raisins.'
                     },
                     {
                            image: './images/donationProcess/before3.jpeg',
                            title: 'Be Well Rested and Hydrate',
                            description: "Get a good night's sleep the night before your donation, eat healthy foods and drink extra liquids.."
                     }
              ],

              during: [
                     {
                            image: './images/donationProcess/when1.jpeg',
                            title: 'RapidPass',
                            description: 'To expedite your donation, start your RapidPass® on the day of your appointment..'
                     },
                     {
                            image: './images/donationProcess/when2.jpeg',
                            title: 'Photo ID',
                            description: "Please bring your donor card, driver's license or two other forms of identification."
                     },
                     {
                            image: './images/donationProcess/when3.jpeg',
                            title: 'Medication List',
                            description: "We'll need to know about all prescription and over-the-counter medications you're taking."
                     }
              ],
              
              after: [
                     {
                            image: './images/donationProcess/after1.jpeg',
                            title: 'Enjoy a Snack',
                            description: "Relax for a few minutes in our refreshment & recovery area — have some cookies or other snacks — you’ve earned it!."
                     },
                     {
                            image: './images/donationProcess/after2.jpeg',
                            title: 'Tell Others About Your Good Deed',
                            description: "The gratification of giving blood is a feeling you'll want to share."
                     },
                     {
                            image: './images/donationProcess/after3.jpeg',
                            title: 'Drink Extra Liquids',
                            description: 'Drink an extra four (8 oz.) glasses of liquids and avoid alcohol over the next 24 hours..'
                     }
              ]
       };

       // Clear the container before adding new content
       const contentContainer = document.getElementById('content-container');
       contentContainer.innerHTML = '';

       const cards = cardsData[section];
       cards.forEach(card => {
              const cardHTML = `
                     <div class="card">
                            <div class="photo">
                                   <img src="${card.image}" alt="">
                            </div>
                            <div class="content">
                                   <div class="function">
                                          <h4>${card.title}</h4>
                                   </div>
                                   <div class="descript">
                                          <p>${card.description}</p>
                                   </div>
                            </div>
                     </div>
              `;
              contentContainer.innerHTML += cardHTML;
       });
}

document.addEventListener("DOMContentLoaded", function() {
       const beforeElement = document.getElementById('before-section');
       contentLoad('before', beforeElement);
});
