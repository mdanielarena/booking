import searchFilter from './global.js'; //use global if non-ajax return

window.searchInput = () => {
  alert('searchInput');
}

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
    $("#searchInput").attr('placeholder',name)
}





