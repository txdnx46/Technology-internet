/* var num = 10 
     let name = "Tanarat Sudjai"
     age = 20 
     arr = ["java","html","css"]
     obj={name:"Tanrat",age:20,skils:"java"}
     data = {adress:["104","Mega",15], position: "Dev"}
     console.log(obj.name, data.position, "Language skils ", arr[0])
     console.log(data.adress[1])*/
    //document.getElementById("msg").innerHTML = obj.name //+HTML
    //let longtxt = obj.skils[2] + " : " + obj.name + " position " + data.position 

    data = { adress: ["104", "Mega", 15], position: "Dev" }
    obj = { name: "Tanrat Sudjai", age: 20, skils: ["java", "php", "javasclip"] }

    longtxt =  `Skill language programming ${obj.skils[2]} 
                Name : ${obj.name} 
                Position : ${data.position}`
    console.log(longtxt)
    //run j query
    $(function(){
        $("#longtxt").html(longtxt)     
    })
    