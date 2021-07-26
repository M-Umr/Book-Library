function Send_Data() {
    var name = document.getElementById("name").value
    var cont = document.getElementById("cont").value
    const form = document.getElementById("form")
    const errorElement = document.getElementById("error")
    var a = 1
    form.addEventListener('submit', (e) => {
        let messages = []
        if (name.value === '' || name.value == null) {
            messages.push("NAme Required")

        }
        e.preventDefault()
        var httpr = new XMLHttpRequest();
        httpr.open("POST", "check.php", true);
        httpr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        httpr.onreadystatechange = function() {

            if (httpr.readyState == 4 && httpr.status == 200) {
                document.getElementById("response").innerHTML = httpr.responseText;
            }
        }
        httpr.send("name=" + name + "&cont=" + cont);

        errorElement.innerText = messages



    })
}