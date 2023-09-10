$(function(){

    let flag = false;
    $('.menu-toggle-btn').click(function () {
        $('.menu-toggle-btn').toggleClass("effect");
        $('.menu-list').toggleClass("effect");
      });
   

    $(".empbtn").on("click",function(e) {
        e.preventDefault();
        const params = [$(".email").val(),$(".password").val()]
        isEmpty = params.some(field => field === "")
        const data = {
            flag:"esignin",
            email: params[0],
            password: params[1],
        }
        const signin = (data) => {
            $.post("app/execute/exec",data,(res)=>{
                (res.trim() == "success") ?window.location.href = "app/view/dashboard" : alert(res);
            })
        }
        isEmpty ? alert("all fields are required"): signin(data);
    })

   

    $(".radial").click(function(e) {
        $(".overlay").css("display","block")
        flag = true
    })

    $(".close").click(function(e) {
        $.post("../execute/logout.php",function(res){
            window.location.href ="../../employee"
        })
    })

    $(".userr").click(function(e) {
        $(".overlays").css("display","block")
        flag = true
    })

    $(".exp").click(function(e) {
        const description = $(this).closest("tr").find(".explain").text()
        $(".infotext").text(description)
        $(".overlayss").css("display","block")
        flag = true
    })

    $(".progress").change(function(e) {
        if(confirm("Task progress will be updated, Continue?")){
            const taskid = $(this).closest("tr").find(".taskid").text()
            const progress = $(this).val()
            const data = {
                flag:"update",
                taskid:taskid,
                progress:progress
            }
            $.post("../execute/exec",data,(res)=>{
                alert(res)
                window.location.href = ""
            })
            console.log(taskid, progress)
        }
    })

    $(".top-right").on("click",function(e) {
        flag = false
        window.location.href =""
       
    })

    $(".task").on("click",function(){
        const raw = [$(".username").val(),$(".start").val(),$(".end").val(),$(".info").val()]
        const isEmpty = raw.some(field => field === "")
        const data = {
            flag:"task",
            username: raw[0],
            start: raw[1],
            end: raw[2],
            info: raw[3],
        }
        const newtask = (data) => {
            $.post("../execute/exec",data,(res)=>{
                alert(res)
                //console.log(res)
            })
        }
        isEmpty ? alert("all fields are required"): newtask(data);
    })

    $(".play").on("click",function(e){
        e.preventDefault();
        const taskid = $(this).closest("tr").find(".taskid").text()
        const data = {flag:"play",taskid:taskid}
        $.post("../execute/exec",data,function(res){
            alert(res);
            window.location.href =""
        })
    })
    $(".pause").on("click",function(e){
        e.preventDefault();
        const taskid = $(this).closest("tr").find(".taskid").text()
        const data = {flag:"pause",taskid:taskid}
        $.post("../execute/exec",data,function(res){
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
            $.post("../execute/exec",data,function(res){
                alert(res);
                taskrow.remove()
            })
        }
    })
    $(".menu").on("click",function(){
        window.location.href = "../view/mytask";
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
            $.post("../execute/exec",data,function(res){
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