export class searchFilter {
  
  constructor(data) {
    this._data = data
  }
  
  filter() {

    var input, filter, ul, li, a, i, txtValue;
    input  = this._data;
    filter = this._data.toUpperCase();
    ul = document.getElementById("filterData");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {

        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }

  }

  // constructor(name) {
  //   // invokes the setter
  //   this.name = name;
  // }

  // get name() {
  //   return this._name;
  // }

  // set name(value) {
    
  //     let myUrl = `${url}/search-data`
  //     let postData = {data:value,_token:token}

  //     $.post(myUrl,postData, (res) => {
  //       this._name = res;
  //     },'json')
          
  // }

}

export class cookie {

  constructor() {}

  setCookie(name,value,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
  }

  getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }


}