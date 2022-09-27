
const search= () =>{
    const searchbox =document.getElementById("search-item").ariaValueMax.toUpperCase();
    const storeitem = document.getElementById("mater-list")
    const content = document.querySelectorAll(".data-cont-1")
    const pname =storeitem.getElementsByTagName("h4")

    for (var i= 0; i < pname.length; i++) {
        let match = content[i].getElementsByTagName('h4')[0];

        if(match){
          let textvalue =  match.textContent || match.innerHTML

            if(textvalue.toUpperCase().indexOf(searchbox) > -1){
                content[i].style.display ="";

            }else{
                content[i].style.display ="none";
            }

        }


    }
}