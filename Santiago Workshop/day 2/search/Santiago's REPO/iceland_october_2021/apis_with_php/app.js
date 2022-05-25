
let page = 1

async function get_items(){
  // Connect to the API
  // const conn = await fetch("https://ecuaguia.com/iceland/api-get-items?page="+page)
  const conn = await fetch(`https://ecuaguia.com/iceland/api-get-items?page=${page}`)
  // Get the data from the API
  const response = await conn.json()
  console.log(response)
  // const item = {"id":10,"name":"xxxxxx"}
  // Path to the images: https://ecuaguia.com/iceland/images/
  response.forEach( item => {
    let final_price = item.price + (item.price * 24.50)/100
    final_price = final_price.toFixed(2)
    let div_item = `<div class="item">
                      <div>${item.id}</div>
                      <div>${item.name}</div>
                      <img src="https://ecuaguia.com/iceland/images/${item.image}">
                      <h1>${final_price}</h1>
                    </div>`
    document.querySelector("#items").insertAdjacentHTML("beforeend", div_item)
  })
  // page = page + 1
  page ++
}

get_items()
