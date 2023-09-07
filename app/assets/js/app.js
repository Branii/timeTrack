$(function(){

    let flag = false;
    $('.menu-toggle-btn').click(function () {
        $('.menu-toggle-btn').toggleClass("effect");
        $('.menu-list').toggleClass("effect");
      });
    
    $(".registger").on("click",function(e){
        e.preventDefault();
        const raw = [$(".username").val(),$(".email").val(),$(".mobile").val(),$(".password").val()]
        const isEmpty = raw.some(field => field === "")
        const data = {
            "username":raw[0],
            "email":raw[1],
            "mobile":raw[2],
            "password":raw[3],
        }
        const register = (data) => {
            $.post("../execute/exec.php",data,(res)=>{
                console.log(res);
            })
        }
        isEmpty ? alert("all fields are required"): register(data);
    })

    $(".signin").on("click",function(e){
        e.preventDefault();
        const params = [$(".email").val(),$(".password").val()]
        isEmpty = params.some(field => field === "")
        const data = {
            flag:"signin",
            email: params[0],
            password: params[1],
        }
        const signin = (data) => {
            $.post("../execute/exec.php",data,(res)=>{
                window.location.href = "app/view/home.php";
            })
        }
        isEmpty ? alert("all fields are required"): signin(data);
    })

    $(".employee").on("click",function(e){
        e.preventDefault();
        const params = [$(".name").val(),$(".email").val()]
        isEmpty = params.some(field => field === "")
        const data = {
            flag:"add",
            name: params[0],
            email: params[1]
        }
        const addEmployee = (data) => {
            $.post("../execute/exec.php",data,(res)=>{
                alert(res)
            })
        }
        isEmpty ? alert("all fields are required"): addEmployee(data);
    })

    $(".radial").click(function(e) {
        $(".overlay").css("display","block")
        flag = true
    })

    $(".close").click(function(e) {
        $.post("../execute/logout.php",function(res){
            alert(res);
            window.location.href ="../../index.php"
        })
    })

    $(".userr").click(function(e) {
        $(".overlays").css("display","block")
        flag = true
    })

    $(".top-right").on("click",function(e) {
        flag = false
        window.location.href =""
       
    })

    $(".task").on("click",function(){
        const raw = [$(".username").val(),$(".start").val(),$(".end").val()]
        const isEmpty = raw.some(field => field === "")
        const data = {
            flag:"task",
            username: raw[0],
            start: raw[1],
            end: raw[2],
        }
        const newtask = (data) => {
            $.post("../execute/exec.php",data,(res)=>{
                alert(res)
            })
        }
        isEmpty ? alert("all fields are required"): newtask(data);
    })

    $(".play").on("click",function(e){
        e.preventDefault();
        const taskid = $(this).closest("tr").find(".taskid").text()
        const data = {flag:"play",taskid:taskid}
        $.post("../execute/exec.php",data,function(res){
            alert(res);
            window.location.href =""
        })
    })
    $(".pause").on("click",function(e){
        e.preventDefault();
        const taskid = $(this).closest("tr").find(".taskid").text()
        const data = {flag:"pause",taskid:taskid}
        $.post("../execute/exec.php",data,function(res){
            alert(res);
            window.location.href =""
        })
        
    })
    $(".delete").on("click",function(e){
        e.preventDefault();
        if(confirm("Do you want to remove this task?")){
            const taskid = $(this).closest("tr").find(".taskid").text()
            const taskrow = $(this).closest("tr")
            const data = {flag:"delete",taskid:taskid}
            $.post("../execute/exec.php",data,function(res){
                alert(res);
                taskrow.remove()
            })
        }
    })



    //timer runner
    setInterval(function(){
        const currentTime = new Date();
        const hours = currentTime.getHours();
        const minutes = currentTime.getMinutes();
        const seconds = currentTime.getSeconds();
        const time = hours + " : " + minutes + " : " + seconds;
        // Get the current time in the browser's local time format
        const ampm = hours >= 12 ? 'PM' : 'AM';
        $("#timer").text(time + " " + ampm);

        if(seconds == 0){
            const data = {flag:"timer"}
            $.post("../execute/exec.php",data,function(res){
                console.log(res);
                if(flag == true){
                    // wait for open modals
                }else{
                    window.location.href =""
                }
                
            })
        }
    },1000)

})