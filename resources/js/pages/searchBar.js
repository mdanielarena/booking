import { searchFilter, cookie } from './global.js'; //use global if non-ajax return

let mycookie = new cookie()

$(() => {  
    $("#checkIn").val(mycookie.getCookie('checkIn'))
    $("#checkOut").val(mycookie.getCookie('checkOut'))
    $("#searchInput").attr('placeholder',mycookie.getCookie('searchInput'))
})


$("#searchInput").keyup((event) => {

    var searchInput = $("#searchInput").val()
    var myUrl    = `${url}/search-data`
    var postData = {data:`${searchInput}`,_token:token}
    
    $.post(myUrl,postData, (res) => {

        new searchFilter(searchInput).filter()
        var html = ""
        let data = JSON.parse(Base64.decode(res))
        if(data.succ) {
            var code = data.val.code
            var name = data.val.name
            html += "<li><a href='#' onClick='filterData(\""+code+"\","+name+")'>"+name+"</a></li>"
            $("#filterData").html(html)
        } else {
            html += `<li><a href="#" >none</a></li>`
            $("#filterData").html(html)
        }
        
    },'json')

})

window.filterData = (code,name) => {
    $("#filterValue").val(code)
    mycookie.setCookie('searchInput',name,31)
    $("#searchInput").attr('placeholder',mycookie.getCookie('searchInput'))
}





