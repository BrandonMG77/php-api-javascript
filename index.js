let page;
var allData;

fetch('https://jsonplaceholder.typicode.com/users',
)
  .then(response => response.json())
  .then(data => {
    allData = data;
    console.log(allData)
    document.getElementById('app').innerHTML = data[0]['name'];
    
    
  }
    );

    let x = window.location.href;
    console.log(x);


  