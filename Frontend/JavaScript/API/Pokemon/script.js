let pokemonList = [];

fetch('https://pokeapi.co/api/v2/pokemon/')
  .then(response => response.json())
  .then(data => {
    pokemonList = data.results;
    pokemonList.forEach(pokemon => {
      fetch(pokemon.url)  
        .then(response => response.json())  
        .then(pokemonData => {
          const li = document.createElement('li');
          li.innerHTML = `
            <img src="${pokemonData.sprites.front_shiny}" alt="">
            <div>
              <h2>${pokemonData.name}</h2>
            </div>
          `;
          document.querySelector('ul').appendChild(li);
        })
        })})
  .catch(error => console.error(error));
  
  
  
  let data = {
    users : [ 
      {
      id: 1,
      name: "Leanne Graham",  
      username: "Bret",
      email: "hXqFP@example.com"
    } , 
      {
      id: 2,
      name: "Ervin Howell",
      username: "Antonette",
      email: "yM6lE@example.com"
    } ,
    ],
    
    
    jobs: [],
  }
  
  data.users[0].name
  