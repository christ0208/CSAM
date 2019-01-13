let value = feedback;

if(value.includes("<SCRIPT>") && value.includes("</SCRIPT>") && value.length > 17){  
    alert("TEAM4{xss_cl4ss1c_expl0it_c6fca}");
}