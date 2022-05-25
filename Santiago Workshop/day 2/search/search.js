function show_results(){
    document.querySelector("#results").style.display = "grid"
  }
  
  function hide_results(){
    document.querySelector("#results").style.display = "none"
  }
  

  let my_timer
  function search(){
    console.log("searching...")
    document.querySelector("#results").innerHTML = ""
    // const search = event.target.value
    // console.log (search)
    // Connect the API
    clearTimeout(my_timer) // Killing the clock, while it was waiting.

    my_timer = setTimeout( async ()=>{
        const search = document.querySelector("#search_for").value
        const con = await fetch(`https://coderspage.com/iceland/search-items?search=${search}`)
        const data = await con.json()
        
        data.forEach( item => {
        let div_item = `<div class="result" id="ID${item.item_id}">
                          <span>${item.item_name}</span>
                          <span>${item.item_id}</span>
                          <span onclick="delete_item('${item.item_id}')">🗑️</span>

                        </div>`
        document.querySelector("#results").insertAdjacentHTML("afterbegin", div_item)
 
        })
    }, 300) // 1000 is the ms in the timeout function, so be sure to search your item, before that...
  }

/// Delete Fnction
  async function delete_item(item_id){
    document.querySelector(`#ID${item_id}`).remove() // This removes the element from the DOM, but still in the DB
    // Line to remove from database (DB);
    const con = await fetch(`https://coderspage.com/iceland/item/${item_id}` , {
        method : "DELETE"
      })
    console.log(` ${item_id} was deleted`)
  }
  
  
  // API KEY TO CREATE AN ITEM: 7f8add14-8be1-4edc-9f89-8a1abcd040b3
  
  