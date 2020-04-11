export default class searchFilter {
  
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

}