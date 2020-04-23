window.hotelAvailability = (code,key,hotel_code) => {

    let postData = {
        _token : token,
        key : key,
        code : code,
        hotel_code : hotel_code
    }

    const myurl = `${url}/hotel-availability`
    
    $.post(myurl,postData,(res) => {

        console.log(res)    

    },'json')
    

    
}