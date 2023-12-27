function login1() {
        var mtDate = new Date();
       alert(myDate.setDate(mtDate.getDate()+5));
                }

// Hide-show-login-signin-forget
//login
document.getElementById("show-login").onclick = function() {hide_login()};
function hide_login() {
    document.getElementById("hide-show-login").classList.toggle("hide");
    }
document.getElementById("hide-login").onclick = function() {hide_login()};
function hide_login() {
    document.getElementById("hide-show-login").classList.toggle("hide");
    }
//signin
document.getElementById("show-signup").onclick = function() {hide_signup()};
    function hide_signup() {
document.getElementById("hide-show-signup").classList.toggle("hide");
        }
document.getElementById("hide-login").onclick = function() {hide_signup()};
    function hide_signup() {
document.getElementById("hide-show-signup").classList.toggle("hide");
        }
//forget
document.getElementById("show-forget").onclick = function() {hide_forget()};
    function hide_forget() {
document.getElementById("hide-show-forget").classList.toggle("hide");
        }
document.getElementById("hide-forget").onclick = function() {hide_forget()};
    function hide_forget() {
document.getElementById("hide-show-forget").classList.toggle("hide");
        }
//Két thúc Hide-show-login-signin-forget
//Chuyển qua lại giữa đăng kí và đăng nhập va quen mat khau
//Dn-dk
document.getElementById("creatacc").onclick = function() {taoacc()};
    function taoacc() {
        document.getElementById("hide-show-login").classList.toggle("hide");
        document.getElementById("hide-show-signup").classList.toggle("hide");
    }
//dk-dn
document.getElementById("loginacc").onclick = function() {dnacc()};
    function dnacc() {
        document.getElementById("hide-show-login").classList.toggle("hide");
        document.getElementById("hide-show-signup").classList.toggle("hide");
    }
//dn-qmk
document.getElementById("forgetacc").onclick = function() {quenacc()};
    function quenacc() {
        document.getElementById("hide-show-login").classList.toggle("hide");
        document.getElementById("hide-show-forget").classList.toggle("hide");
    }
//qmk-dn
document.getElementById("creatacc1").onclick = function() {taoacc1()};
    function taoacc1() {
        document.getElementById("hide-show-forget").classList.toggle("hide");
        document.getElementById("hide-show-signup").classList.toggle("hide");
    }
//qmk-dn
document.getElementById("haveacc").onclick = function() {coacc()};
    function coacc() {
        document.getElementById("hide-show-forget").classList.toggle("hide");
        document.getElementById("hide-show-login").classList.toggle("hide");
    }
//Kết thúc chuyển qua lại giữa đăng kí và đăng nhập va quen mat khau
//Chi tiết sản phẩm.
document.getElementById("chitietsanpham").onclick = function() {mota()};
    function mota() {
        document.getElementById("motasanpham").classList.toggle("show");
        document.getElementById("chitietsanpham").classList.toggle("show1");
        document.getElementById("motaright").classList.toggle("mota-right");
        document.getElementById("chitietright").classList.toggle("chitiet-right");
    }//trái sang phải
document.getElementById("motasanpham").onclick = function() {chitiet()};
    function chitiet() {
        document.getElementById("motasanpham").classList.toggle("show");
        document.getElementById("chitietsanpham").classList.toggle("show1");
        document.getElementById("motaright").classList.toggle("mota-right");
        document.getElementById("chitietright").classList.toggle("chitiet-right");
    }

// BE
function ContentPage(id){
    location.href = "show-content.php?id="+id;
}
