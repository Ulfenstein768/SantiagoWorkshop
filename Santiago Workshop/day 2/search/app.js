
let page = 1


async function get_items(){
    // Connect to the api
    const con = await fetch(`https://ecuaguia.com/iceland/api-get-items?page=${page}`)
        // By default request it a GET, so we don't have to declare it or write anyrhing in the curly brackets
        // Get the data from the api
    const response = await con.json()
    console.log(response)

    // const item = {"id":10, "name":"xxxx"}
    // Path to images: https://ecuaguia.com/iceland/images
    response.forEach(item => {
        let final_price = item.price + (item.price * 24.50)/100
        final_price = final_price.toFixed(2)
        let div_item = `<div class="item">
                          <div>${item.id}</div>
                          <div>${item.name}</div>
                          <img src="https://ecuaguia.com/iceland/images/${item.image}">
                          <div>${final_price}</div>
                        </div>`


        document.querySelector("#items").insertAdjacentHTML("beforeend", div_item)
    } )
    
    page ++
}

get_items() 