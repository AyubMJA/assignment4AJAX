// Retrieve lists and updates it on the screen.

window.addEventListener("load", function(){
    console.log("Page called");
    const listItem = document.getElementById("listItem")
    listItem.innerHTML = "";

    function success(items){
        // console.log(response)

        items.forEach(i => {
            let li = document.getElementById("li")
            li.innerHTML = i.item + i.quantity
            
            listItem.append(li)
        })


    }

    (function getList() {
        let url = "server/getList.php";
        console.log(url);

        fetch(url, {credentials: 'include'})
            .then(response => response.json())
            .then(success)
    })()

    let form = document.getElementById("form");



    form.addEventListener("submit", function(event){
        event.preventDefault();
        let item = document.getElementById("item");
        let quantity = document.getElementById("quantity");
        let url = "server/addItem.php";
        let params = "item=" + item + "&quantity=" + quantity;
        console.log(url);
        fetch(url, {
            method: 'POST',
            credentials: 'include',
            headers:{"Content-Type":"application/x-www-form-urlencoded"},
            body:params
        })
        .then(response => response.text())
        .then(success)
    })

});