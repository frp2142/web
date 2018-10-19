function action(){    
    console.log("pressed");
    var value=$(this).parent().children().text();
    alert(value);
    console.log(value);    
 }
