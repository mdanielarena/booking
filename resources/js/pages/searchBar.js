import searchFilter from './global.js'; //use global if non-ajax return

window.searchInput = () => {
  alert('searchInput');
}

$("#searchInput").keyup((event) => {

    var searchInput = $("#searchInput").val()
    var myUrl    = `${url}/search-data`
    var postData = {data:`"${searchInput}"`,_token:token}
    
    $.post(myUrl,postData, (res) => {

        new searchFilter(searchInput).filter()
        let html = ""
        let data = JSON.parse(Base64.decode(res))
        if(data.succ) {
            var code = data.val.code
            var name = data.val.name
            html += `<li><a href="#" class='search-drop' value="${code}">${name}</a></li>`
        } else {
            html += `<li><a href="#" class='search-drop'>none</a></li>`
        }

        $("#myUL").html(html)

    },'json')

})

$("#myUL").on('click','a.search-drop', () => {
    var code = $(this).attr('value');
    console.log($(this).attr('value'))
})




