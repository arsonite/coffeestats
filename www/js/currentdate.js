function setDate(){
    var date    = new Date();
    var yyyy    = date.getFullYear();
    var mm      = date.getMonth() + 1;
    var dd      = date.getDate();

    if(mm < 10){
        mm = '0' + mm;
    }
    if(dd < 10){
        dd = '0' + dd;
    }
    
//  var combine = [yyyy, mm, dd];
    var today = [yyyy, mm, dd].join('-');
//  var today = combine.join('-');    
//  var today = yyyy + '-' + mm + '-' + dd
    document.getElementById('today').value = today;
}

window.onload = setDate;
